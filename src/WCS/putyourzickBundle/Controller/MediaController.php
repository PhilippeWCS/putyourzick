<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WCS\putyourzickBundle\Entity\Media;
use WCS\putyourzickBundle\Form\MediaType;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class MediaController extends Controller
{
    public function getAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId(); });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);

        $em = $this->getDoctrine()->getManager();
        $media = $em
            ->getRepository('WCSputyourzickBundle:Media')
            ->findAll();

    $patate = $serializer->serialize($media, 'json');

        return new Response($patate);
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