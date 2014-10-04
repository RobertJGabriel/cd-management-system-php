<?php

namespace assessmentOne\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use assessmentOne\Bundle\Form\ContactType;
use assessmentOne\Bundle\Entity\Cds;
use assessmentOne\Bundle\Form\deleteCd;

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
            $name = $forms->get('Id')->getData();

            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('assessmentOneBundle:Cds')->find($name);

            if (!$product) {
                return $this->render('assessmentOneBundle:conformation:index.html.twig',array('text'=>'Error'));
            }else {

                $em->remove($product);
                $em->flush();

                return $this->render('assessmentOneBundle:conformation:index.html.twig',array('text'=>'All Deleted'));

            }


        }
        return $this->render('assessmentOneBundle:delete:index.html.twig',array('form'=>$forms->createView()));

    }
}











