<?php

namespace PetanqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PetanqueBundle:Default:index.html.twig');
    }
}
