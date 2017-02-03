<?php

namespace IntranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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
     * @Route("/profil/{id}", name="profil", requirements={"id" = "\d+"})
     */
    public function profilAction($id = 0)
    {
        if($id == 0){
            $user = $this->getUser(); //get current user
        } else {
            $user = $this->getDoctrine()
                ->getRepository('EntityBundle:User')
                ->findById($id);
            var_dump($user);
        }
        return $this->render('IntranetBundle:Default:profil.html.twig', array("user"=>$user));
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
     * @Route("/users", name="users")
     */
    public function usersAction()
    {
        $users = $this->getDoctrine()
            ->getRepository('EntityBundle:User')
            ->findAll();

        return $this->render('IntranetBundle:Default:users.html.twig', array("users"=>$users));
    }

}
