<?php
require_once('connect.php');
function db_connect () {
	
	$dsn="mysql:dbname=".BASE.";host=".SERVER;
	try
	{
	  $connexion=new PDO($dsn,USER,PASSWD,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(PDOException $e){
	  printf("echec de la connexion : %s\n", $e->getMessage());
	  exit();
	}
	return $connexion;
}
?>


