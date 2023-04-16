<?php
session_start() ;
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
	
	<title> Les bonbons</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/candy.png" />
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="index.php"><i class="fas fa-candy-cane fa-4x" style="color:#FF5733;"></i></a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
  
		<div class="col text-start">
		 <form class="d-flex" method="POST" action="rechercher.php">
			<input class="form-control me-2" type="search" placeholder="chercher UN bonbon ?" aria-label="Search" name="recherche">
			<button class="btn btn-outline-success" type="submit">Trouver</button>
		</form>
	
    </div>
	
	  <div class="col text-center">
           <a class="nav-link active text-success" aria-current="page" href="panier.php">Voir le <i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i></a>
        </div>
	 
  


	  <div class="col text-end">
           <a class="nav-link active text-dark" aria-current="page" href="admin.php">Espace admin</a>
        </div>
	
   </div>


</nav>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
