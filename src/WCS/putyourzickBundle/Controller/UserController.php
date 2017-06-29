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

        $data = json_decode($request->getContent(), true);
        $plainpassword = $data['password'];
        $email =  $data['email'];
        $username =  $data['pseudo'];


        $user->setPlainPassword($plainpassword);
        $user->setEmail($email);
        $user->setUsername($username);

        $validator = $this->get('validator');
        $errors = $validator->validate($user);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new JsonResponse(array('error' => $errorsString) );
        }
        else{
            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $plainpassword);

            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();



            return new JsonResponse(['msg' => 'success', 'token' => uniqid()]);
        }
    }

    public function loginAction()
    {

    }

}
