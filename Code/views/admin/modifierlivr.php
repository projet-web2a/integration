<?php

include "../../core/livraisonC.php";
include "../../entities/livraison.php";
if(isset($_GET['id']))
{

$li= new livraisonC();
$livraison= new livraison($_POST['adresseLivraison'],$_POST['nom_ville'],$_POST['num_tel'],$_POST['dateLivraison'],$_POST['username'],$_POST['idCommande']);
//var_dump($livraison);
$li->modifierlivraison($livraison,$_GET['id']);
header('Location: livraison.php');
}
?>


i