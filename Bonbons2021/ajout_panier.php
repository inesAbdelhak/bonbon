<?php
session_start() ;
$id=$_GET['ajout'] ;
echo $id ;
if(isset($id))
{
if(!isset($_SESSION['panier']))
{
$_SESSION['panier'] =array(); // création de la variable de session

}
if(isset($_SESSION['panier'][$id]))
{
$_SESSION['panier'][$id]++ ;

}
else
{
$_SESSION['panier'][$id]=1 ;
}
$_SESSION['alert']="le produit a été ajouté au panier !" ;
header('location:index.php') ;
}
?>