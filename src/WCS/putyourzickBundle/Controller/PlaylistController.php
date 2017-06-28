<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use WCS\putyourzickBundle\Entity\Playlist;
use WCS\putyourzickBundle\Form\PlaylistType;

class PlaylistController extends Controller
{
    public function getAction()
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em
            ->getRepository('WCSputyourzickBundle:Playlist')
            ->findAll();

        return new JsonResponse('success');
    }


    public function addAction(Request $request)
    {
        $playlist = new Playlist();

        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($playlist);
            $em->flush();

            $this->addFlash('success', 'Une playlist a bien été ajoutée !');

        }
        return new JsonResponse('success');
    }

    public function editAction(Request $request, Playlist $playlist)
    {

        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($request->isXmlHttpRequest() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

        }

        return new JsonResponse('success');    }

    public function deleteAction(Request $request, Playlist $playlist)
    {
        $em = $this->getDoctrine()->getManager();

        $playlist = $em->getRepository('WCSputyourzickBundle:Playlist')
            ->find($playlist);
        $em->remove($playlist);
        $em->flush();

       return new JsonResponse('success');
    }

}
