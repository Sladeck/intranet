<?php

namespace IntranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use IntranetBundle\Form\notesType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('IntranetBundle:Default:index.html.twig');
    }

    /**
     * @Route("/profil/", name="profil")
     */
    public function profilAction()
    {
        $user = $this->getUser(); //get current user
        return $this->render('IntranetBundle:Default:profil.html.twig', array("user" => $user));
    }

    /**
     * @Route("/notes/", name="notes")
     */
    public function notesAction()
    {
        return $this->render('IntranetBundle:Default:notes.html.twig');
    }

    /**
     * @Route("/matieres/", name="matieres")
     */
    public function matieresAction()
    {
        $user = $this->getUser();
        $matieres = $this->getDoctrine()
            ->getRepository('IntranetBundle:matieres')
            ->findAll();

        return $this->render('IntranetBundle:Default:matieres.html.twig', array("user" => $user, "user_matieres" => $matieres));
    }

    /**
     * @Route("/logout/")
     */
    public function logoutAction()
    {
        return $this->render('IntranetBundle:Default:index.html.twig');
    }

    /**
     * @Route("/users", name="users")
     */
    public function usersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('EntityBundle:User')
            ->findAll();

        return $this->render('IntranetBundle:Default:users.html.twig', array("users" => $users));
    }

    /**
     * @Route("/userProfil/{id}", name="userProfil")
     */
    public function userProfilAction($id)
    {
        $user = $this->getDoctrine()
            ->getRepository('EntityBundle:User')
            ->findById($id);
        return $this->render('IntranetBundle:Default:userProfil.html.twig', array("user" => $user));
    }

}
