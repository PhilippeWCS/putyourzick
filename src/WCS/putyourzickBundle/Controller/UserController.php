<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use WCS\putyourzickBundle\Entity\User;

class UserController extends Controller
{
    public function inscriptionAction(Request $request)
    {
        $user = new User();

        $plainpassword = $request->get('password');
        $email = $request->get('email');
        $username = $request->get('pseudo');

        $user->setPlainPassword($plainpassword);
        $user->setEmail($email);
        $user->setUsername($username);

        $validator = $this->get('validator');
        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new JsonResponse($errorsString);
        }
        else{
            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $plainpassword);

            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse('success');
        }
    }

    public function loginAction()
    {

    }

}
