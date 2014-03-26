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
     * @Route("/add")
     * @Template()
     */
     
    public function addAction(){
		
		$msg = 'AAA'; 
		return $this->render('IutPlanningBundle:Users:add.html.twig', array('msg' => $msg));
	}
	
	/**
     * @Route("/save")
     * @Template()
     */
	public function saveAction () {
		
		$connexion = db_connect(); 
	if ( !empty($_POST['username']) && !empty($_POST['password'])) {
		$idrequete="SELECT count(*) as nb FROM USER where username = '".$_POST['username']."';";
		$reponse = $connexion -> query( $idrequete );
		$d = $reponse -> fetch();
		if ( $d['nb'] != 0 ) { 
			$msg = "Ce username est déja utilisé. Veuillez recommencer !";
		}
		else {
			$insert = "INSERT INTO USER (username, password) values(:u,:p)"; 
			$stmt = $connexion -> prepare($insert); 
			$stmt ->bindParam (':u',$_POST['username']);
			$stmt ->bindParam (':p',md5($_POST['password']));
			$stmt -> execute();
			$msg = "Vous êtes enregistrer !";
		}
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
	
	/**
     * @Route("/id/{id}")
     * @Template()
     */
	 public function showAction(){
		
		$msg = 'AAA';
		return $this->render('IutPlanningBundle:Users:add.html.twig', array('msg' => $msg));
		$msg = $_GET['Username']; 
	}
	
}
