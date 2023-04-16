<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Découverte PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-1">    </div>
    <div class="col-md-10">
		<h2> Nos produits </h2>
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
				 
				  echo "<div class='card' style='width: 10rem;'>
							<img class='card-img-top' src='".$produit->photo ."' >
							<div class='card-body'>
								<h5 class='card-title'>".$produit->nom ."</h5>
								<p class='card-text'> " .$produit->prix ." €</p>
								<a href='#' class='btn btn-primary'>Ajouter</a>
							</div>
						</div>
				</div>" ;
	
		
				}
	
		?>
		</table>
	</div>
    
	<div class="col-md-1">    </div>
  </div>
</div>
</body>
</html>