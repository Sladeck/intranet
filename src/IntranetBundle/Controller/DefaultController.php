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

    /**
     * @Route("/profil/")
     */
    public function profilAction()
    {
        return $this->render('IntranetBundle:Default:profil.html.twig');
    }

    /**
     * @Route("/notes/")
     */
    public function notesAction()
    {
        return $this->render('IntranetBundle:Default:notes.html.twig');
    }

    /**
     * @Route("/matieres/")
     */
    public function matieresAction()
    {
        return $this->render('IntranetBundle:Default:matieres.html.twig');
    }
}
