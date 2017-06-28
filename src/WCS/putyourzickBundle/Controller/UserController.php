<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use WCS\putyourzickBundle\Entity\User;
use WCS\putyourzickBundle\Form\RegistrationType;

class UserController extends Controller
{
    public function inscriptionAction(Request $request)
    {
        $user = new User();

        $validator = $this->get('validator');
        $errors = $validator->validate($user);

        if ($request->isXmlHttpRequest()) {
            if (count($errors) > 0) {
                $errorsString = (string) $errors;

                return new JsonResponse($errorsString);
            }
            else{
                $plainpassword = $request->request->get('password');
                $password = $this->get('security.password_encoder')->encodePassword($plainpassword);
                $email = $request->request->get('email');
                $pseudo = $request->request->get('pseudo');

                $user->setMotDePasse($password);
                $user->setEmail($email);
                $user->setPseudo($pseudo);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return new JsonResponse('success');
            }
        }

        return new JsonResponse('Erreur de requete', 400);
    }

    public function loginAction()
    {

    }

}
