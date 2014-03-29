<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

require_once('PHP/modele.php');

class ActivityController extends Controller
{
    /**
     * @Route("/activity/add")
     * @Template()
     */
    public function addAction()
    {
		$msg = " ";
		return $this->render('IutPlanningBundle:Activity:add.html.twig',array('msg' => $msg));
    }
    
    /**
     * @Route("/activity/saveActivity")
     * @Template()
    */
	public function saveActivityAction()
	{
		$connexion = db_connect(); 
		
		if ( !empty($_POST['NameAct']) ) {
			$idrequete="SELECT count(*) as nb FROM ACTIVITE where actname = '".$_POST['NameAct']."';";
			$reponse = $connexion -> query( $idrequete );
			$d = $reponse -> fetch();
			if ( $d['nb'] != 0 ) { 
				$msg = "Cette activité est déja utilisée. Veuillez recommencer !";
			}
			else {

				$insert = "INSERT INTO ACTIVITE (actname) values(:a);"; 
				//$reponse = $connexion -> query( $insert );
				$stmt = $connexion -> prepare($insert); 
				$stmt ->bindParam (':a',$_POST['NameAct']);
			
				$stmt -> execute();
				$msg = "Vous avez enregistré votre activité !";
			}

		}
		else {
			$msg = "L'un des champs n'a pas été complété !";
		}
			
			return $this->render('IutPlanningBundle:Activity:add.html.twig',array('msg' => $msg));
		}	
		

	/**
     * @Route("/activity/show")
     * @Template()
     */
	 public function showAction(){
		$msg = "lll";
		return $this->render('IutPlanningBundle:Activity:show.html.twig',array('show' => $msg)); 
	}


}
