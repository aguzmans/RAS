<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
use Symfony\Component\HttpFoundation\Request;
use Osd\RetireBundle\Form\Type\SearchType;

class SearchController extends Controller
{
    public function indexAction(Request $request)
    {
        //Create form
        $aWorker = new Worker();
        //Reuse the form from SearchType
        $searchWorkerForm = $this->createForm(new SearchType(), $aWorker);
        //Handle Request
        if ($request->getMethod() == 'POST'){
            $searchWorkerForm->handleRequest($request);

            $aWorkerList = $this->getDoctrine()
                 ->getRepository('OsdRetireBundle:Worker')
                 ->findByPersonDetails($aWorker->getOmang(),
                         $aWorker->getWorkerName(),
                         $aWorker->getWorkerSurname(),
                         $aWorker->getBirthDay(),
                         $aWorker->getDateOfEmployment(),
                         $aWorker->getFileNumber(), 
                         $aWorker->getAIdWorkerStatus());
             $redTime = $this->container->getParameter('time_red');
             $orangeTime = $this->container->getParameter('time_orange');
             if ($redTime == '1/2') $redTime = 6;
             //Return the work list and the form again.
             $content = $this->render('OsdRetireBundle:Default:index.html.twig'
                        , array('searchWorkerForm' => $searchWorkerForm->createView(), 
                        'aWorkerList' => $aWorkerList,
                            'colorRed' => $redTime, 'colorOrange' => $orangeTime));
             return $content;
        }
        //return the form.
        $content = $this->render('OsdRetireBundle:Default:index.html.twig'
                    , array('searchWorkerForm' => $searchWorkerForm->createView()));
        return $content;
    }
}
