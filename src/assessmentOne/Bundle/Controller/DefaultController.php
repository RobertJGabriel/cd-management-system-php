<?php

namespace assessmentOne\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('assessmentOneBundle:Default:index.html.twig', array('name' => $name));
    }
}
