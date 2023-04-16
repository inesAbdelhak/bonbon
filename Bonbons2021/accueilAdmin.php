<?php
session_start() ;
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Découverte PHP</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" ><i class="fas fa-candy-cane fa-4x" style="color:#FF5733;"></i></a>




  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Vous pouvez
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajouter.php">Ajouter un produit</a>
          <a class="dropdown-item" href="modifier.php">Modifier un produit</a>
            <a class="dropdown-item" href="supprimer.php">Supprimer un produit</a>
      </li>
       </div>
	   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
   	   <li class="nav-item">
        <a class="nav-link" href="deconnexion.php">se deconnecter</a>
      </li>
     
	   </ul>
	   </div>
	   </ul>
	   

</nav>
<?php
echo "Cher ". $_SESSION["admin"] . ", " ; 
}
?>
<br> <br> <br>
<h2>  Bienvenue sur votre page protégée ! </h2>
<br>
<br>
<!--
<a href="supp.php?supp=1"> <i class="fas fa-grin-hearts fa-3x"></i> Vous avez très envie de cliquer ici<i class="fas fa-grin-hearts fa-3x"></i></a>
-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>