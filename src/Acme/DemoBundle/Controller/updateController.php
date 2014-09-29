<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Cds;
use Acme\DemoBundle\Form\cdType;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class updateController extends Controller
{
    /**
     * @Route("/", name="_mainCd")
     * @Template()
     */
    public function indexAction()
    {
        $cd = new cds();
        $forms = $this->createForm(new cdType(),$cd);

      //  $id = $forms->get('id')->getData();
        $request = $this->get('request');
        $forms->handleRequest($request);
        if($request->getMethod() == 'POST')
        {
        $name = $forms->get('name')->getData();
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeDemoBundle:Cds')->findOneByName($name );

        if (!$product) {
            return $this->render('AcmeDemoBundle:error:index.html.twig');
        }else {


            $song= $forms->get('song')->getData();
            $story= $forms->get('story')->getData();
            $price= $forms->get('price')->getData();
            $product->setSong($song);
            $product->setStory($story);
            $product->setPrice($price);
            $em->flush();


            return $this->render('AcmeDemoBundle:update:index.html.twig',array('form'=>$forms->createView()));

        }


    }   return $this->render('AcmeDemoBundle:update:index.html.twig',array('form'=>$forms->createView()));
    }
}
