<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IutPlanningBundle:Default:index.html.twig', array('name' => $name));
    }
}
