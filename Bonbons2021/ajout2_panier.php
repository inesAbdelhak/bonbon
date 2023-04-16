<?php
session_start() ;
$id=$_GET['ajout'] ;


$_SESSION['panier'][$id]++ ;

header('location:panier.php') ;

?>