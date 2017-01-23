<?php

namespace IntranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('IntranetBundle:Default:index.html.twig');
    }

    /**
    * @Route("/bon/{i}")
    */
    public function bonAction($i)
    {
      return $this->render('IntranetBundle:Default:base.html.twig', array("nom"=>$i));
    }
}
