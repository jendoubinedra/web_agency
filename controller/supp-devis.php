<?php 

require_once('../Model/devis.class.php');

$devis = new devis($_POST['titre'],$_POST['description'],$_POST['nature'],$_POST['date_limite'],$_POST['email'],$_POST['telephone']);

$devis->supprimer();
header("Location:../liste.php?resultat=supp devis");
//echo 'oui';
//exit();
?>