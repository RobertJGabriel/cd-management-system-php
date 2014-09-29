<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Cds;
use Acme\DemoBundle\Form\deleteCd;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class deleteController extends Controller
{
    /**
     * @Route("/", name="_deleteCd")
     * @Template()
     */
    public function indexAction()
    {



        $cd = new cds();
        $forms = $this->createForm(new deleteCd(),$cd);


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




           $em->remove($product);
            $em->flush();

            return $this->render('AcmeDemoBundle:delete:index.html.twig',array('form'=>$forms->createView()));

        }


    }
 return $this->render('AcmeDemoBundle:delete:index.html.twig',array('form'=>$forms->createView()));

}
}











