<?php

namespace IntranetBundle\Controller;

use IntranetBundle\Entity\notes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Note controller.
 *
 * @Route("notes")
 */
class notesController extends Controller
{
    /**
     * Lists all note entities.
     *
     * @Route("/", name="notes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $notes = $em->getRepository('IntranetBundle:notes')->findAll();

        return $this->render('notes/index.html.twig', array(
            'notes' => $notes,
        ));
    }

    /**
     * Creates a new note entity.
     *
     * @Route("/new", name="notes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $note = new Note();
        $form = $this->createForm('IntranetBundle\Form\notesType', $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush($note);

            return $this->redirectToRoute('notes_show', array('id' => $note->getId()));
        }

        return $this->render('notes/new.html.twig', array(
            'note' => $note,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a note entity.
     *
     * @Route("/{id}", name="notes_show")
     * @Method("GET")
     */
    public function showAction(notes $note)
    {
        $deleteForm = $this->createDeleteForm($note);

        return $this->render('notes/show.html.twig', array(
            'note' => $note,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing note entity.
     *
     * @Route("/{id}/edit", name="notes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, notes $note)
    {
        $deleteForm = $this->createDeleteForm($note);
        $editForm = $this->createForm('IntranetBundle\Form\notesType', $note);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('notes_edit', array('id' => $note->getId()));
        }

        return $this->render('notes/edit.html.twig', array(
            'note' => $note,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a note entity.
     *
     * @Route("/{id}", name="notes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, notes $note)
    {
        $form = $this->createDeleteForm($note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush($note);
        }

        return $this->redirectToRoute('notes_index');
    }

    /**
     * Creates a form to delete a note entity.
     *
     * @param notes $note The note entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(notes $note)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notes_delete', array('id' => $note->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
