<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
use Symfony\Component\HttpFoundation\Request;
use Osd\RetireBundle\Form\Type\WorkerType;

class EditController extends Controller
{
    public function indexAction(Request $request, $id = null)
    {
        // Find the worker using it's ID.        
        $aWorker = new Worker();
        $em = $this->getDoctrine()->getManager();
        $aWorker = $em->getRepository('OsdRetireBundle:Worker')->find($id);
            //Throw exaption if the ID is wrong.
            if (!$aWorker) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            // Create the form to render worker to edit.

        }
        $searchWorkerForm = $this->createForm(new WorkerType(), $aWorker, 
                    array ('action' => 'edit'));
        $idToEdit = $aWorker->getIdWorker();
        // Create response.
        $content = $this->render('OsdRetireBundle:Retire:edit.html.twig'
                    , array('searchWorkerForm' => $searchWorkerForm->createView(),
                'idToEdit' => $idToEdit));
        return $content;
    }
    
    public function persistAction(Request $request, $id = null)
    {

                // Find the worker using it's ID.        
                $em = $this->getDoctrine()->getManager();
                $aWorker = $em->getRepository('OsdRetireBundle:Worker')->find($id);

                //Throw exaption if the ID is wrong.
                if (!$aWorker) {
                    throw $this->createNotFoundException(
                        'No product found for id '.$id
                );
                }
                
                $searchWorkerForm = $this->createForm(new WorkerType(), $aWorker, 
                    array ('action' => 'edit')); 
          
                 if ($request->getMethod() == 'POST'){  

                    $searchWorkerForm->handleRequest($request);
                    $em->flush();
                    $content = $this->render('OsdRetireBundle:Retire:edit.html.twig'
                        , array('persisted' => $aWorker->getWorkerName()
                            .' Edited and saved successfully to the databese'));
                    return $content;
                }
        $content = $this->render('OsdRetireBundle:Retire:edit.html.twig'
            , array('persisted' => 'Edition failed!'));
        return $content;
    }
}

?>
