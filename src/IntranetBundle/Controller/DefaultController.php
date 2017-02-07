<?php

namespace IntranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use IntranetBundle\Form\notesType;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Entity\UserManager;

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

    /**
     * @Route("/createUser", name="createUser")
     */
    public function createUserAction(Request $request)
    {

      $userManager = $this->get('fos_user.user_manager');
      $user = $userManager->createUser();
      $user->setUsername($request->get("username"));
      $user->setEmail($request->get("email"));
      $user->setPlainPassword($request->get("password"));
      $user->setRoles($request->get("roles"));

      $userManager->updateUser($user);

      $users = $this->getDoctrine()
          ->getRepository('EntityBundle:User')
          ->findAll();
        return $this->render('IntranetBundle:Default:users.html.twig', array("users" => $users));
    }

    /**
    * @Route("/deleteUser", name="deleteUser")
    **/
    public function deleteUserAction(Request $request)
    {
      $userManager = $this->get('fos_user.user_manager');

      $user = $userManager->findUserBy(array('id'=>$request->get("id")));
      $userManager->deleteUser($user);

      $users = $this->getDoctrine()
          ->getRepository('EntityBundle:User')
          ->findAll();
        return $this->render('IntranetBundle:Default:users.html.twig', array("users" => $users));
    }

    /**
     * @Route("/updateUser", name="updateUser")
     */
    public function updateUserAction(Request $request)
    {
      $userManager = $this->get('fos_user.user_manager');
      $user = $userManager->findUserBy(array('id'=>$request->get('id')));
      $user->setUsername($request->get('username'));
      $user->setEmail($request->get('email'));
      $user->setPlainPassword($request->get('password'));
      $user->setRoles($request->get('roles'));

      $userManager->updateUser($user);

      $user = $this->getDoctrine()
          ->getRepository('EntityBundle:User')
          ->findById($request->get('id'));

        return $this->render('IntranetBundle:Default:userProfil.html.twig', array("user" => $user));
    }
}
