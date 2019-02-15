<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
//        ]);

        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/membre", name="membre")
     */
    public function membreAction(Request $request)
    {
        return $this->render('default/membre.html.twig');
    }
    /**
     * @Route("/pro", name="professionnel")
     */
    public function professionnelAction(Request $request)
    {

        return $this->render('default/professionnel.html.twig');
    }
}
