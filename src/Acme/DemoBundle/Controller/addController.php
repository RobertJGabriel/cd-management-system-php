<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\DemoBundle\Entity\Cds;
use Acme\DemoBundle\Form\cdType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class addController extends Controller
{
    /**
     * @Route("/", name="_AddCd")
     * @Template()
     */
    public function indexAction()
    {
        $cd = new cds();
        $forms = $this->createForm(new cdType(),$cd);

        $request = $this->get('request');
        $forms->handleRequest($request);

         if($request->getMethod() == 'POST')
         {


             if($forms->isValid())
             {
                 $name = $forms->get('name')->getData();
                 $cd ->setName($name);

                 $em = $this->getDoctrine()->getManager();
                 $em->persist($cd);
                 $em->flush();

              //   return new Response( 'Cd Created');
             }
             return $this->render('AcmeDemoBundle:add:index.html.twig', array('form'=>$forms->createView()));

         }



        return $this->render('AcmeDemoBundle:add:index.html.twig', array('form'=>$forms->createView()));

    }

}
?>