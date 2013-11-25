<?php

namespace Osd\RetireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Osd\RetireBundle\Entity\Worker;
use Symfony\Component\HttpFoundation\Request;
use Osd\RetireBundle\Form\Type\SearchType;

class AboutController extends Controller
{
    public function indexAction(Request $request)
    {

        $content = $this->render('OsdRetireBundle:Retire:about.html.twig');
        return $content;
    }
}
