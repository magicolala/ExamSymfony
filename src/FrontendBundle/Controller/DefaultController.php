<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Film;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
	public function newFilmAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $film = new Film();

        $form = $this->createForm('FrontendBundle\Form\FilmType', $film);
        $form->handleRequest($request);

        if ($form->isValid())
        {
            $photo = $film->getFolder();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/film';
            $photo->move($photoDir, $photoName);

            $film->setFolder($photoName);

            $em->persist($film);
            $em->flush();
        }

        return $this->render('FrontendBundle:Default:newfilm.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $allMovie = $em->getRepository('FrontendBundle:Film')->findAll();

        return $this->render('FrontendBundle:Default:index.html.twig',
        	array (
        	'movies' => $allMovie,
        ));
    }

    public function articleAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

		return $this->render('FrontendBundle:Default:article.html.twig');
    }

    public function showAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $thisMovie = $em->getRepository('FrontendBundle:Film')->findOneById($id);

		$comments = $em->getRepository('FrontendBundle:Comment')
                   ->getCommentsForFilm($thisMovie->getId());

        return $this->render('FrontendBundle:Default:show.html.twig',
        	array(
        		'film' => $thisMovie,
				'comments'  => $comments
        ));

    }
}
