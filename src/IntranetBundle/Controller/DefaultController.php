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
        $current_user = $this->getUser(); //get current user

        $matieres = $this->getDoctrine()
                    ->getRepository('IntranetBundle:matieres')
                    ->findAll();

        $user = $this->getDoctrine()
                ->getRepository('EntityBundle:User')
                ->findOneById($current_user->getId());
        return $this->render('IntranetBundle:Default:profil.html.twig', array("current_user"=>$current_user,"matieres"=>$matieres,"user"=>$user));
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
