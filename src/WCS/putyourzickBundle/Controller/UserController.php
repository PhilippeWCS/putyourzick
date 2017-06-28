<?php

namespace WCS\putyourzickBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function inscriptionAction(Request $request)
    {


        return $this->render('WCSputyourzickBundle:User:inscription.html.twig', array(
            // ...
        ));
    }

}
