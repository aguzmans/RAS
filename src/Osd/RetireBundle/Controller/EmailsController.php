<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use PhpEws\ExchangeWebServices;
use Doctrine\Common\Collections\ArrayCollection;


class EmailsController extends Controller
{
    public function indexAction()
    {
        //get Repository get data from DB
        $totalWorkers = $this->getDoctrine()
                 ->getRepository('OsdRetireBundle:Worker');
        //Count all workers
        $total = $totalWorkers->findBycountTotalWorkers ();
        //find all workers to get information from them
        $Workers = $totalWorkers->findAll();
        //Count between 59 and 60
        $totalLessAYear = 0;
        //Count less than 7 motns
        $totalLess7months = 0;
        //Count young workers
        $totalWithLessThan59Years = 0;        
        $totalLessAYearArray = new ArrayCollection();
        
        //Get the people to who we should sen e-mails...
        $emailsToSend = $this->container->getParameter('my_mails.people');
        $emailSubject= $this->container->getParameter('my_mails.subject');
        //echo $emailSubject;
        $emailBody ='<html><body><h1>Updated information from RAS.</h1><br>';
        $emailBody .= 'Automated Report generated on: '.date('Y-m-d h:i:s').'<br>';
        $workerForMailLessAYear = '';
        $workerForMailLess7moths = '';                
        foreach ($Workers as $w)
        {
            if ($w->getYearsLeft() < 1 
                    && ($w->getYearsLeft() >= 0 
                    && $w->getYearsLeft() !== '-00'))
            {
                $totalLessAYear ++;
                //Create a Worker ROW to list
                $workerForMailLessAYear .= $totalLessAYear.'- '
                        .$w->getWorkerTitle().' '
                        .$w->getWorkerName().' '
                        .$w->getWorkerSurname().', Retirement date: '
                        .$w->getRetireYear ()->format('Y-m-d').', Time to retire: '
                        .$w->getTimeToRetirement ().'<br>';
                
                if ($w->getMonthsLetf() <= 6)
                {
                    $totalLess7months ++;
                                    //Create a Worker ROW to list
                    $workerForMailLess7moths .= $totalLess7months.'- '
                        .$w->getWorkerTitle().' '
                        .$w->getWorkerName().' '
                        .$w->getWorkerSurname().', Retirement date: '
                        .$w->getRetireYear ()->format('Y-m-d').', Time to retire: '
                        .$w->getTimeToRetirement ().'<br>';
                }
            } 
            else 
                $totalWithLessThan59Years ++;
        }
        $emailBody .= 
                '<h2>Workers that are more than 59 and 5 months and less than 60 years old: '
                .$totalLess7months.'</h2><br>';
        $emailBody .= $workerForMailLess7moths;
        //worker between 59 and 60
        $emailBody .= '<h2>Workers between 59 and 60 years old: '
                .$totalLessAYear.'</h2>';
        $emailBody .= $workerForMailLessAYear;
        $emailBody .= 
                '<h2>Total of Workers in the database: '
                .$total.'</h2><br>';        
        //end of the email
        $emailBody .= '</body></html>';        
        //send email.
        $this->sendEmail($emailsToSend,$emailSubject,'',$emailBody);
        
        return new Response($emailBody);
    }
    protected function sendEmail($emailsToSend
            , $subject = 'RAS', $bodyType = 'HTML'
            , $body = 'Contact the Admin, we seem to have a problem' ){
        $PhpEwsPath = __DIR__."/php-ews/";
    
        require_once $PhpEwsPath.'ExchangeWebServices.php';
        require_once $PhpEwsPath.'NTLMSoapClient.php';
        require_once $PhpEwsPath.'NTLMSoapClient/Exchange.php';
        require_once $PhpEwsPath.'EWS_Exception.php';
        require_once $PhpEwsPath.'EWSType.php';
        require_once $PhpEwsPath.'EWSType/MessageType.php';
        require_once $PhpEwsPath.'EWSType/EmailAddressType.php';
        require_once $PhpEwsPath.'EWSType/BodyType.php';
        require_once $PhpEwsPath.'EWSType/SingleRecipientType.php';
        require_once $PhpEwsPath.'EWSType/CreateItemType.php';
        require_once $PhpEwsPath.'EWSType/NonEmptyArrayOfAllItemsType.php';
        require_once $PhpEwsPath.'EWSType/ItemType.php';        
        
        
        $server = 'khs01sw05.gabs.hospitals.moh.gov.bw';
        $username = 'aguzman@gabs.hospitals.moh.gov.bw';
        $password = 'kla3465a';  
        $ews = new \ExchangeWebServices($server, $username, $password);

        $msg = new \EWSType_MessageType();

        $toAddresses = array();
        $i = 0;
        foreach ($emailsToSend as $email){

            $toAddresses[$i] = new \EWSType_EmailAddressType();
            $toAddresses[$i]->EmailAddress = $email[1];
            $toAddresses[$i]->Name = $email[0];   
            $i ++;
        }     
             
        $msg->ToRecipients = $toAddresses;
		
        $fromAddress = new \EWSType_EmailAddressType();
        $fromAddress->EmailAddress = 'aguzman@gov.bw';
        $fromAddress->Name = 'Abel';
        
        $msg->From = new \EWSType_SingleRecipientType();
        $msg->From->Mailbox = $fromAddress;

        $msg->Subject = $subject;

        $msg->Body = new \EWSType_BodyType();
        $msg->Body->BodyType = 'HTML';
        $msg->Body->_ = $body;

        $msgRequest = new \EWSType_CreateItemType();
        $msgRequest->Items = new \EWSType_NonEmptyArrayOfAllItemsType();
        $msgRequest->Items->Message = $msg;
        $msgRequest->MessageDisposition = 'SendAndSaveCopy';
        $msgRequest->MessageDispositionSpecified = true;

        $response = $ews->CreateItem($msgRequest);
        //var_dump($response);        
    }
}

?>
