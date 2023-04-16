<?php
session_start() ;	

	// Récupération des données saisies dans le formulaire d’identification
$login=$_POST["login"] ;
$mdp=md5($_POST["mdp"]) ;
// Connexion au serveur de BDD
require "config.php" ;
$bdd=connect() ;
			
// Requête de recherche du mot de passe de l’admin à partir de l’identifiant saisi
$sql="select * from admin where login='$login' and mdp='$mdp'" ;
		
// Execution de la requête
$resultat=$bdd->query($sql) ;
$rep = $resultat->fetch(PDO::FETCH_BOTH) ;
$nb_lignes= $resultat->rowCount() ;
					
if ($nb_lignes==0) 
// La requête ne renvoie aucun résultat, l'identifiant est inconnu et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
		{

		header("Location: echecRecherche.php");
		}
		else
// La requête renvoie au plus un résultat (l’admin recherché)
		{
		$_SESSION["admin"]= $rep[0] ;
		$_SESSION["autorisation"]="OK" ;
		
		
		 header("Location: accueilAdmin.php");
		
		
		}
	
	
	
	
?>