<?php
session_start() ;
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){

$supp=$_GET["supp"] ;

//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	
	$sql="delete from produit where id=$supp" ;	
		
	
			//execution de la requête
			$resultat=$bdd->exec($sql) ;
			
		
			header("location:supprimer.php") ;
}
else
{
	echo "page non autorisée" ;
	include "footer.php" ;
}
?>