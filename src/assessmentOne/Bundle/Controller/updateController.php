<?php

namespace assessmentOne\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use assessmentOne\Bundle\Form\cdType;

use assessmentOne\Bundle\Entity\Cds;
use assessmentOne\Bundle\Form\updateCd;
use assessmentOne\Bundle\Form\search;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class updateController extends Controller
{
    /**
     * @Route("/", name="_updateCd")
     * @Template()
     */
    public function indexAction()
    {
        $cd = new cds();
        $forms = $this->createForm(new search(),$cd);
        $request = $this->get('request');
        $forms->handleRequest($request);
        if($request->getMethod() == 'POST')
        {
            $name = $forms->get('Id')->getData();
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('assessmentOneBundle:Cds')->find($name);
            if (!$product) {
                return $this->render('assessmentOneBundle:search:index.html.twig',array('form'=>$forms->createView()));
            }else {

                $forms2 = $this->createForm(new updateCd(),$cd);
                $request2 = $this->get('request');
                $forms2->handleRequest($request2);
                if($request2->getMethod('POST'))
                {
                    $build['id']    = $product;
                    $build['name']  = $product;
                    $build['song']  = $product;
                    $build['story'] = $product;
                    $build['price'] = $product;

                    $name= $forms2->get('name')->getData();
                    $song= $forms2->get('song')->getData();
                    $story= $forms2->get('story')->getData();
                    $price= $forms2->get('price')->getData();

                    if ($forms2->get('update')->isClicked()) {
                        $product->setName($name);
                        $product->setSong($song);
                        $product->setStory($story);
                        $product->setPrice($price);
                        $em->flush();
                        return $this->render('assessmentOneBundle:conformation:index.html.twig',array('text'=>'Cd updated'));
                    }
                }
                return $this->render('assessmentOneBundle:update:index.html.twig',array('form'=>$forms2->createView(),'text'=>$build));
            }
        }
        return $this->render('assessmentOneBundle:search:index.html.twig',array('form'=>$forms->createView()));
    }



}
?>