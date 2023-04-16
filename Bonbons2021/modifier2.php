
<?php
include "header.php" ;
//connexion à la BDD
require "config.php" ;
$bdd=connect() ;


		$modif = $_GET['modif'];
		$_SESSION['modif']= $modif  ;
		
	
	$sql = "select * from produit where id='$modif'" ;
	$resultat = $bdd->query($sql) ;
	
	
	?>
	<div class="container">
<div class="row center mt-5">
<div class="col">
	<form method="POST" action="modifier_OK.php">
	<?php
	while($produit =$resultat->fetch(PDO::FETCH_OBJ))
		{
		echo "<tr><td><input type=text name='nom' value='  ".$produit->nom . "'></td> <td><input type=text name=prix value=' ".$produit->prix . "' ></td><td><input type=text name=photo value='".$produit->photo."' > </td></tr>";
		echo "<input type='hidden' name='id' value='".$produit->id ."'> ";
		}
	
	?>
	</table>
	 <br />
	 <br />
	 
	 <input type=submit value='Validez les modifications' class="btn btn-primary">
	
	 </form>
	 </div>
	 </div>
	 </div>

<?php
include "footer.php" ;
?>