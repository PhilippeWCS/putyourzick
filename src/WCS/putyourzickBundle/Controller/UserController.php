<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use WCS\putyourzickBundle\Entity\User;
use WCS\putyourzickBundle\Form\RegistrationType;

class UserController extends Controller
{
    public function inscriptionAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        if ($request->isXmlHttpRequest() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getMotDePasse());
            $user->setMotDePasse($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return new JsonResponse('success');
        }

        return new JsonResponse($form);
    }

    public function loginAction
    {

    }

}
