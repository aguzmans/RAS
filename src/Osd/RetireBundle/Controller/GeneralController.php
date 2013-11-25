<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
//use Symfony\Component\HttpFoundation\Request;
//use Osd\RetireBundle\Form\Type\WorkerType;

class GeneralController extends Controller
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
        //count retired status
        $countRetired = 0;
        foreach ($Workers as $w)
        {
            if ($w->getYearsLeft() < 1 
                    && ($w->getYearsLeft() >= 0 
                    && $w->getYearsLeft() !== '-00'))
            {
                $totalLessAYear ++;
                if ($w->getMonthsLetf() <= 6)
                {
                    $totalLess7months ++;
                }

            }
            else 
                $totalWithLessThan59Years ++;
            if ($w->getAIdWorkerStatus()->getDescription() == 'Retired')
                $countRetired ++;
        }
        //count more than 60 years old
        $totalMoreThan60 = 0;
        foreach ($Workers as $w)
        {
            if ($w->getYearsLeft() < 0 || $w->getYearsLeft() === '-00')
                $totalMoreThan60 ++;
        }

        
        
        $content = $this->render('OsdRetireBundle:Retire:general.html.twig' 
                , array ('lessThanOneYear' => $totalLessAYear
                , 'totalWorkers' => $total
                , 'moreThan60' => $totalMoreThan60
                , 'lessThan7Months' => $totalLess7months
                , 'totalWithLessThan59Years' => $totalWithLessThan59Years
                , 'totalRetired' => $countRetired));
        return $content;
    }

}

?>
