<?php

namespace Iut\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

require_once('PHP/modele.php');

class DefaultController extends Controller
{
	public $msg;
	
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
	/**
     * @Route("/menuPrincipal")
     * @Template()
     */
    public function menuPrincipalAction()
    {
        return ;
    }
    
    /**
     * @Route("/add")
     * @Template()
     */
     
    public function addAction(){
		
		$msg = "";
		return $this->render('IutPlanningBundle:Users:add.html.twig', array('msg' => $msg));
	}
	
	/**
     * @Route("/save")
     * @Template()
     */
	public function saveAction () {
		
	$connexion = db_connect(); 
	
	//$msg = $_POST['Username']." ".$_POST['Password'];
	
	if ( !empty($_POST['Username']) && !empty($_POST['Password'])) {
		$idrequete="SELECT count(*) as nb FROM USER where username = '".$_POST['Username']."';";
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
		if ( $d['nb'] != 0 ) { 
			$msg = "Ce username est déja utilisé. Veuillez recommencer !";
		}
		else {
			/*
			
			$u = $_POST['Username'];
			$insert = "INSERT INTO USER (username, password) values('".$u."','".$p."');";
			* */
			$p = md5($_POST['Password']);
			$insert = "INSERT INTO USER (username, password) values(:u,:p);"; 
			//$reponse = $connexion -> query( $insert );
			$stmt = $connexion -> prepare($insert); 
			$stmt ->bindParam (':u',$_POST['Username']);

			$stmt ->bindParam (':p',$p);
						
			$stmt -> execute();
			$msg = "Vous êtes enregistré !";
		}

	}
	else {
		$msg = "L'un des champs n'a pas été complété !";
	}	
	return $this->render('IutPlanningBundle:Users:add.html.twig', array('msg' => $msg));
		
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
