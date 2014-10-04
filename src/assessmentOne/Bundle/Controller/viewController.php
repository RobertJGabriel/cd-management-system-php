<?php

namespace assessmentOne\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use assessmentOne\Bundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class viewController extends Controller
{
    /**
     * @Route("/", name="_viewCd")
     * @Template()
     */
    public function indexAction()
    {


        $product = $this->getDoctrine()
            ->getRepository('assessmentOneBundle:Cds')
            ->findAll();

        if (!$product) {
            return $this->render('assessmentOneBundle:conformation:conformation.html.twig',array('text'=>'No Cds'));

        }else {

            $build['id']    = $product;
            $build['name']  = $product;
            $build['song']  = $product;
            $build['story'] = $product;
            $build['price'] = $product;

            return $this->render('assessmentOneBundle:view:index.html.twig',$build);
        }

        return $this->render('assessmentOneBundle:view:index.html.twig');

    }


}
