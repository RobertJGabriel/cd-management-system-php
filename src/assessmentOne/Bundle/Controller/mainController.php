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

class mainController extends Controller
{
    /**
     * @Route("/", name="_mainCd")
     * @Template()
     */
    public function indexAction()
    {


        return $this->render('assessmentOneBundle:main:index.html.twig');
    }


}

?>






