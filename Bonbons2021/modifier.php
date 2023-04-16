
<?php
include "header.php" ;
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>

<div class="container text-center">

  <div class="row mt-3">
  	 <div class="col"> <h2> Quel bonbon voulez-vous modifier ? </h2></div>
 
			 </div>
		 <div class="row">

<table class="table-bordered">
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
				 
				 ?>
				 <div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src='images/<?php echo $produit->photo ?>' >
							<div class='card-body'>
								<h5 class='card-title'><?php echo $produit->nom ?></h5>
								<p class='card-text'> <?php echo $produit->prix ?> €</p>
								<a id='mywish' class='btn btn-danger' href='modifier2.php?modif=<?php echo $produit->id ;?>'>Modifier</a>
							</div>
						</div>
	
		<?php
				}
	
		?>
		</table>
<?php
}
else
{
	echo "page non autorisée" ;
	include "footer.php" ;
}
	?>