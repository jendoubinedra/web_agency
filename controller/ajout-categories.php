<?php 

require_once('../Model/categories.class.php');
$categorie = new categorie($_POST['nomc']);
$categorie->ajouter();
header("Location:../liste-categories.php?resultat=ajouter categories");
//echo 'oui';
//exit();
?>
