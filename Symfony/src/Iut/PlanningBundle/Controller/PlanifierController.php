<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

require_once('PHP/modele.php');

class PlanifierController extends Controller
{

    /**
     * @Route("/planifier/add")
     * @Template()
     */
     
    public function addAction(){
		
		$msg = "";
		$connexion = db_connect();
		$idrequete="SELECT * FROM `PLANIFIER`";
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
		
		return $this->render('IutPlanningBundle:Planifier:add.html.twig', array('msg' => $msg, 'activite' => $d));
	}
	
	  /**
     * @Route("/planifier/savePlanifier")
     * @Template()
     */
     
	public function savePlanifierAction () {
	
	$connexion = db_connect(); 
	
	if ( !empty($_POST['Username']) && !empty($_POST['NameAct']) && !empty($_POST['Date']) && !empty($_POST['Heure'])) {
		$idrequete="SELECT count(*) as nb FROM `PLANIFIER` WHERE `date`= ".$_POST['Date']." and `heure` = ".$_POST['Heure'].";";
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
		if ( $d['nb'] != 0 ) { 
			$msg = "Il y a déjà une activité de prévu à cette date. Veuillez recommencer !";
		}
		else {
			$requete = "SELECT iduser FROM `USER` WHERE `username` = '".$_POST['Username']."';"; 
			$reponse = $connexion -> query( $requete );
		    $d1 = $reponse -> fetch();
		    
			$requete = "SELECT idact FROM `ACTIVITE` WHERE `actname` = '".$_POST['NameAct']."';"; 
			$reponse = $connexion -> query( $requete );
		    $d2 = $reponse -> fetch();
				
			$insert = "INSERT INTO PLANIFIER (iduser,idact,date,heure) values(:u,:a,:d,:h);";
			
			//$reponse = $connexion -> query( $insert );
			$stmt = $connexion -> prepare($insert); 
			$stmt ->bindParam (':u',$d1['iduser']);
			$stmt ->bindParam (':a',$d2['idact']);
			$stmt ->bindParam (':d',$_POST['Date']);
			$stmt ->bindParam (':h',$_POST['Heure']);	
				
			$stmt -> execute();
			$msg = "Votre activité est enregistrée !";
		}

	}
	else {
		$msg = "L'un des champs n'a pas été complété !";
	}
	
	return $this->render('IutPlanningBundle:Planifier:add.html.twig', array('msg' => $msg));
		
	}
	
	  /**
     * @Route("/id/{id}")
     * @Template()
     */
     
    public function idAction($id){
		$connexion = db_connect();
		$idrequete="SELECT count(*) as nb FROM USER where iduser = '".$id."';";
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
		if ( $d['nb'] == 0 ) { 
			$msg = "Ce username n'existe pas. Veuillez recommencer !";
			return $this->render('IutPlanningBundle:Users:id.html.twig',array ('msg' => $msg, 'iduser' => '', 'username' => ''));
		}	
		else {
		$idrequete = "SELECT * FROM USER where iduser = '".$id."';"; 
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
	}
		return $this->render('IutPlanningBundle:Users:id.html.twig',array('msg' => '', 'username' => $d['username'],'iduser' => $d['iduser']));	
	}
	
	public function saveActivityAction()
	{
		$connexion = db_connect(); 
		
		if ( !empty($_POST['NameAct']) ) {
			$idrequete="SELECT count(*) as nb FROM ACTIVITY where actname = '".$_POST['NameAct']."';";
			$reponse = $connexion -> query( $idrequete );
			$d = $reponse -> fetch();
			if ( $d['nb'] != 0 ) { 
				$msg = "Cette activité est déja utilisée. Veuillez recommencer !";
			}
			else {


				$insert = "INSERT INTO ACTIVITY (actname) values(:a);"; 
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
			return array('IutPlanningBundle:Activity:add.html.twig',array('msg' => $msg));
		}

}
