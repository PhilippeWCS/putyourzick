<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use WCS\putyourzickBundle\Entity\Media;
use WCS\putyourzickBundle\Entity\Playlist;
use WCS\putyourzickBundle\Form\MediaType;
use WCS\putyourzickBundle\Form\PlaylistType;

class MediaController extends Controller
{
    public function getAction()
    {
        $em = $this->getDoctrine()->getManager();
        $media = $em
            ->getRepository('WCSputyourzickBundle:Media')
            ->findAll();

        return new JsonResponse('success');
    }

    public function addAction(Request $request)
    {
        $media = new Media();
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            $this->addFlash('success', 'Une musique a bien été ajoutée !');

            return new JsonResponse('success');

        }
        return new JsonResponse('error');
    }

    public function editAction(Request $request, Media $media)
    {
        $form = $this->createForm(MediaType::class, $media);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return new JsonResponse('success');
        }
        return new JsonResponse('error');
    }

    public function deleteAction(Request $request, Media $media)
    {
        $em = $this->getDoctrine()->getManager();
        $playlist = $em->getRepository('WCSputyourzickBundle:Media')
            ->find($media);
        $em->remove($media);
        $em->flush();

        return new JsonResponse('success');
    }
}