<?php

namespace BlogServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogServiceBundle:Default:index.html.twig');
    }
}
