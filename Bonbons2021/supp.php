<?php
session_start() ;

if(isset($_GET["jeton"]) && $_GET["jeton"]==$_SESSION["jeton"])
{
$supp=$_GET["supp"] ;

//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	
	$sql="delete from produit where id=$supp" ;	
		
	
			//execution de la requête
			$resultat=$bdd->exec($sql) ;
			
}			
			header("location:supprimer.php") ;

?>