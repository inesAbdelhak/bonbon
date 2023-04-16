<?php
session_start() ;
$id=$_GET['retrait'] ;
$nb=$_SESSION['panier'][$id] ;

if($nb==1)
{
unset($_SESSION['panier'][$id]) ;
}
else
{
$_SESSION['panier'][$id]-=1 ;
}
header('location:panier.php') ;
?>