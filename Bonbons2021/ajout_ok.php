<?php
include "header.php" ;
if($_SESSION["autorisation"]=="OK"){


?>

<div class="container text-center">

		 <div class="row mt-5">
<?php
extract($_POST) ;


$nom_image = basename($_FILES["image"]['name']);
$chemin_destination = 'images/' . $nom_image;
$resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin_destination);


//connexion à la BDD
			require "config.php" ;
			$bdd=connect() ;
			
		
			//requête	insertion
		
		$sql="insert into produit(nom, prix, photo) values('$nom', $prix, '$nom_image')";
		echo $sql ;
			//execution de la requête
			$resultat=$bdd->exec($sql) ;

echo "<div class='alert alert-danger' role='alert'>
 Le produit a été ajouté :)
</div> </div>" ;


	//requête	affichage
			$req="select * from produit order by id desc limit 0,1" ;
		
			//execution de la requête
			$resultat=$bdd->query($req) ;
			
			//affichage des resultats dans un objet
			
			while($produit = $resultat->fetch(PDO::FETCH_OBJ))
				{
				 
				  echo "<div class='card text-center' style='width: 15rem;'>
							<img class='card-img-top' src='".$produit->photo ."' >
							<div class='card-body'>
								<h5 class='card-title'>".$produit->nom ."</h5>
								<p class='card-text'> " .$produit->prix ." €</p>
								<a id='mywish' href='ajout_panier.php?ajout=".$produit->id ."' class='btn btn-danger'>Ajouter au <i class='fas fa-cart-plus'></i></a>
							</div>
						</div>" ;
	
		
				}

?>
 <a href="accueilAdmin.php">Page admin</a>

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