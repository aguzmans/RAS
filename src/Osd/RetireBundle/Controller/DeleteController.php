<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
use Symfony\Component\HttpFoundation\Request;
use Osd\RetireBundle\Form\Type\WorkerType;

class DeleteController extends Controller
{
    public function indexAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        $aWorker = $em->getRepository('OsdRetireBundle:Worker')->find($id);
        $em->remove($aWorker);
        $em->flush();
        $content = $this->render('OsdRetireBundle:Retire:delete.html.twig'
                    , array('deleted' => 'Worker deleted sucessfully'));
        return $content;
    }
}

?>
