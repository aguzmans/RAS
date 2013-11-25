<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OsdRetireBundle:Default:index.html.twig', array('name' => $name));
    }
}
