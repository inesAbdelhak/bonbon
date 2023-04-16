<?php
	
// Récupération des données saisies dans le formulaire d’identification
$id=$_POST["id"] ;
$mdp=$_POST["mdp"] ;
// Connexion au serveur de BDD
require "config.php" ;
			$bdd=connect() ;
			
// Requête de recherche du mot de passe de l’admin à partir de l’identifiant saisi
$sql="select * from admin where id='$id' and mdp='$mdp'" ;
			
// Execution de la requête
$resultat=$bdd->query($sql) ;
					
$nb_lignes->rowCount($resultat) ;
					
if ($nb_lignes==0) 
// La requête ne renvoie aucun résultat, l'identifiant est inconnu et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
		{
		header("Location: EchecRecherche.html");
		}
		else
// La requête renvoie au plus un résultat (l’admin recherché)
		{
		header("Location: accueil_admin.html");
		}	
		
	
