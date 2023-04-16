<?php
include("header.php") ;
?>
   <div class="container text-center">

			 
		 <div class="row mt-5">         
 

  

		<?php
			$recherche=$_POST["recherche"] ;
			$recherche=strtolower($recherche) ;
			echo "	
		          <div class='alert alert-warning' role='alert'>
Votre recherche : $recherche 
</div> </div>
				   
            
            ";
			
			
			//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
			
			//requête	
			$sql="select * from produit where lower(nom) like'%$recherche%' " ;
		
			//execution de la requête
			$resultat=$bdd->query($sql) ;
			
			//affichage des resultats dans un objet
			echo "<h3> Nous vous proposons : </h3>"; 
			while($produit = $resultat->fetch(PDO::FETCH_OBJ))
				{
				 
				  echo "<div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src='images/".$produit->photo ."' >
							<div class='card-body'>
								<h5 class='card-title'>".$produit->nom ."</h5>
								<p class='card-text'> " .$produit->prix ." €</p>
								<a id='mywish' href='ajout_panier.php?ajout=".$produit->id ."' class='btn btn-danger'>Ajouter au <img src='images/panier.png'></a>
							</div>
						</div>" ;
	
		
				}
	
	include "footer.php" ;
		?>
				
		
	