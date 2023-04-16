<?php
include "header.php" ;



?>
<div class="container">

  <div class="row">
  	 <div class="col"> <h2 class="text-danger text-center"> Nos délicieux bonbons </h2></div>

  <?php 
  if(isset($_SESSION["alert"])){
	  ?>
 <div class='alert alert-success' role='alert' data-auto-dismiss="2000">
  <?php echo $_SESSION["alert"] ?>
</div>
 
<?php unset($_SESSION["alert"]) ;}
  ?>
</div>
			
		 <div class="row">
		<div class="col p-2">
		<?php
			//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	
			$sql="select * from produit " ;
		
			//execution de la requête
			$resultat=$bdd->query($sql) ;
			
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
		include "footer.php" ;
		?>
	</div>
	</div>
