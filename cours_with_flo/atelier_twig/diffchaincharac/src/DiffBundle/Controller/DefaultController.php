<?php

namespace DiffBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function formAction(Request $request)
    {
        $defaultData = null;
        $form = $this->createFormBuilder($defaultData)
            ->add('textone', TextareaType::class)
            ->add('texttwo', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "message" keys
            $data = $form->getData();
            return $this->render('@Diff/Default/result.html.twig' , array(
            'resultat'=>$data));
        }

        return $this->render('@Diff/Default/index.html.twig', array(
            'formulaire' => $form->createView()
        ));
    }

}
