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

class mainController extends Controller
{
/**
* @Route("/", name="_mainCd")
* @Template()
*/
public function indexAction()
{


    return $this->render('AcmeDemoBundle:main:index.html.twig');
}


}

?>






