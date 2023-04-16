<?php
session_start() ;

unset($_SESSION['panier']) ;

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

<h2> Votre panier est vide </h2>

<a href='index.php' class="btn btn-info"> reprendre les achats  </a>

