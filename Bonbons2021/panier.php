<?php 
include "header.php";
if(isset($_SESSION["panier"]) and !empty($_SESSION["panier"]))
{


?>
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
<?php
require 'config.php';
$bdd= connect();
  
$total =0;
$frais=5;
$totalttc = 0;


 ?>
 <div class="container">
	  <div class="row">
	  <div class="col-md-12">
 <h2>Votre Panier </h2>
 </div>
 </div>
 <div class="row">
 <div class="col-md-12">
         <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col" >Produit</th>
			
            <th scope="col">Prix Unit.</th>
            <th scope="col">Quantité</th>
            <th scope="col">Montant</th>
           </tr>
        </thead>
        <tbody>

           <?php 
			   foreach($_SESSION['panier'] as $id=>$quantite )
			{
		$sql="select * from produit where id=$id" ;
		$resultat = $bdd->query($sql) ;
		$produits =$resultat->fetch(PDO::FETCH_ASSOC) ;
				  
			?>
            <tr>           
              <td><?php echo $produits['nom'] ;?></td>
			  <td><?php echo number_format($produits['prix'],2,',',' ');?> €</td>
            <td> 
              <?php echo $quantite; ?>
            </td>
            <td> <?php echo number_format($produits['prix']* $quantite,2,',',' ');?>€</td>
			<td> <a href='ajout2_panier.php?ajout=<?php echo $produits['id'] ?>' /><i class="fa fa-plus fa_3x" aria-hidden="true"></i> </a></td>
			<td> <a href='retrait_panier.php?retrait=<?php echo $produits['id'] ?>' /><i class="fa fa-minus " aria-hidden="true"></i></td>
          </tr>
          <?php $total += $produits['prix']*$quantite;?>
           <?php } ?>
       

        </tbody>
      </table>
	  </div>
	  </div>
	   <div class="row">
	  <div class='col-md-6'> </div>
	  <div class="col-md-6">
	  <table class= "table table-dark">
       <tr><th> Total HT  </th> <td> <em><?php echo number_format($total,2,',',' ') ?> €</em></td> </tr>
        <tr> <th> TVA(19.6 %) </th> <td>		<em>  <?php echo number_format($total*0.196,2,',',' ') ?> €</em></td></tr>
		<tr> <th>Frais de port </th> <td> <em> <?php echo $frais ?> €</em></td></tr>
        <tr> <th> TOTAL TTC </th> <td> <em> <?php echo number_format($total+$frais,2,',',' ') ?> €</em></td> </tr>
  		</table>
		 </div>
		 </div>
		 <div class="row">
		 	  <div class='col-md-6'> </div>
		 <div class="col-md-6">
             <a href="index.php" class="btn btn-info">Continuer mes achats</a> <br> <br>

         <a href="" class="btn btn-info" >Payer</a> <br> <br>
		
		<a href="vider.php" class="btn btn-info">Vider le panier</a>
             </div>     
     
	 </div>
<?php
	 }
else
{
echo "<h2>votre panier est vide  </h2>" ;
echo "
<a href='index.php' class='btn btn-info'> reprendre les achats  </a> " ;

}
?>
</body>
</html>