<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IutPlanningBundle:Default:index.html.twig', array('name' => $name));
    }
    
    /**
     *@Route("/add")
     *@Template()
    */
    
    public function addAction() {
    }
}
