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
     * @Route("/profil/")
     */
    public function profilAction()
    {
        $user = $this->getUser();
        return $this->render('IntranetBundle:Default:profil.html.twig', array("user"=>$user));
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

    /**
     * @Route("/logout/")
     */
    public function logoutAction()
    {
        return $this->render('IntranetBundle:Default:index.html.twig');
    }

    /**
     * @Route("/users")
     */
    public function usersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('EntityBundle:User')
            ->findAll();

        return $this->render('IntranetBundle:Default:users.html.twig', array("users"=>$users));
    }

}
