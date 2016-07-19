<?php


namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Comment;
use FrontendBundle\Form\CommentType;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($film_id)
    {
        $film = $this->getFilm($film_id);

        $comment = new Comment();
        $comment->setFilm($film);
        $form   = $this->createForm(new CommentType(), $comment);

        return $this->render('FrontendBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    public function createAction($film_id)
    {
        $film = $this->getFilm($film_id);

        $comment  = new Comment();
        $comment->setFilm($film);
        $request = $this->getRequest();
        $form    = $this->createForm(new CommentType(), $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            // TODO: Persist the comment entity

            $em = $this->getDoctrine()
                       ->getEntityManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('film_show', array(
                'id' => $comment->getFilm()->getId())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('FrontendBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    protected function getFilm($film_id)
    {
        $em = $this->getDoctrine()
                    ->getEntityManager();

        $film = $em->getRepository('FrontendBundle:Film')->find($film_id);

        if (!$film) {
            throw $this->createNotFoundException('Impossible de trouver le film.');
        }

        return $film;
    }

}
