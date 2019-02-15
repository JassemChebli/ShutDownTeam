<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@User/Default/index.html.twig');
    }
    public function AdminIndexAction()
    {
        return $this->render('@User/Default/Admin.html.twig');
    }
}
