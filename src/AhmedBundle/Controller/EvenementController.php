<?php

namespace AhmedBundle\Controller;

use AppBundle\Entity\evenement;
use AppBundle\Form\evenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementController extends Controller
{
    public function ajoutAction(Request $request)
    {
        $event = new evenement();
        $form = $this->createForm(evenementType::class, $event);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

        }
        return $this->render('@Ahmed/Evenement/ajout.html.twig',
            array(
                "Form"=>$form->createView()
            ));
    }
    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('AppBundle:evenement')->findAll();
        return $this->render('@Ahmed/Evenement/liste.html.twig',
            array(
                "events" => $events,

            ));
    }
}
