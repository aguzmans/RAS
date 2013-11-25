<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
use Symfony\Component\HttpFoundation\Request;
use Osd\RetireBundle\Form\Type\WorkerType;

class NewController extends Controller
{
    public function indexAction(Request $request)
    {
        //Create form
        $aWorker = new Worker();
      
        $options = array('action' => 'save');
        //$a = new WorkerType
        $searchWorkerForm = $this->createForm(new WorkerType(), $aWorker, 
                $options);        
        //get the information from post when is sent
        if ($request->getMethod() == 'POST'){
                $searchWorkerForm->handleRequest($request);
                $em = $this->getDoctrine()->getManager();
                $em->persist($aWorker);
                $em->flush();
                $content = $this->render('OsdRetireBundle:Retire:index.html.twig'
                    , array('persisted' => $aWorker->getWorkerName().' saved to the databese'));
                return $content;
        }
        //create content to show.
        $content = $this->render('OsdRetireBundle:Retire:index.html.twig'
                    , array('searchWorkerForm' => $searchWorkerForm->createView()));
        return $content;
    }
}

?>
