<?php
include "header.php" ;
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
<div class="container text-center">

  <div class="row">
  	 <div class="col"> <h2> Bonbon modifié</h2></div>
 
			 </div>
		 <div class="row">
		 <?php
//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
			//recup des nouvelles valeurs
		extract($_POST) ;
		
		
			//requête	
			$sql="update produit set nom= '$nom', prix=$prix, photo='$photo' where id=$id" ;
			//execution de la requête
			$resultat=$bdd->exec($sql) ;
			
			//affichage d'un message
			
			echo "<div class='alert alert-danger' role='alert'>
 Le produit a été modifié :)
</div> </div>" ;


	//requête	affichage
			$req="select * from produit where id=$id " ;
		
			//execution de la requête
			$resultat=$bdd->query($req) ;
			
			//affichage des resultats dans un objet
			
			while($produit = $resultat->fetch(PDO::FETCH_OBJ))
				{
				 
				  echo "<div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src='images/".$produit->photo ."' >
							<div class='card-body'>
								<h5 class='card-title'>".$produit->nom ."</h5>
								<p class='card-text'> " .$produit->prix ." €</p>
								<a id='mywish' href='ajout_panier.php?ajout=".$produit->id ."' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
							</div>
						</div>" ;
	
		
				}

?>


</div>
</div>
<?php
}
else
{
	echo "page non autorisée" ;
	include "footer.php" ;
}
	
	?>
 <a href="accueilAdmin.php">Page admin</a>
