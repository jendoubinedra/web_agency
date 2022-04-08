<?php 

require_once('../Model/devis.class.php');

$devis = new devis($_POST['titre'],$_POST['description'],$_POST['nature'],$_POST['date_limite'],$_POST['email'],$_POST['telephone']);

$devis->modifier();
header("Location:../liste.php?resultat=modif devis");
//echo 'oui';
//exit();
?>