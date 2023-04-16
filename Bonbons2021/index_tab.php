<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Découverte PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-2">    </div>
    <div class="col-md-8">
		<h2> Nos produits </h2>
		<table class="table-bordered">
		<?php
			//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;

			try
			{
			//requête	
			$sql="select * from produit " ;
				
			//execution de la requête
			$resultat=$bdd->query($sql) ;
			
			//affichage des resultats dans un objet
			while($produit = $resultat->fetch(PDO::FETCH_OBJ))
				{
				echo "<tr> <td>". $produit->nom ."</td> <td> ".$produit->prix ." €</td> <td> <img src='".$produit->photo ."'> </td></tr>" ;
				}
	
			}
			catch(PDOException $e)
			{
			echo "erreur dans la requête <br>" . $e->getMessage() ;
			}
	
		?>
		</table>
	</div>
    
	<div class="col-md-2">    </div>
  </div>
</div>
</body>
</html>