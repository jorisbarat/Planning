<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    

    /**
     * @Route("/add")
     * @Template()
     */
    public function formuserAction(){
		      return $this->render('IutPlanningBundle:User:add.html.twig');	
		}
}
