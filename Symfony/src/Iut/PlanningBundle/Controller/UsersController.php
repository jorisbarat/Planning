<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UsersController extends Controller
{
    /**
     * @Route("/add")
     * @Template()
     */
     
    public function addAction()
    { 
			
    }
    
	/*
     * @Route("/id/{id}")
     * @Template()
     */
    public function idAction($id)
    {
    }

}
