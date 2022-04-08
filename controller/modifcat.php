<?php 

require_once('../Model/categories.class.php');

$categorie = new categorie($_POST['nomc']);

$categorie->modifier();
header("Location:../liste-categories.php?resultat=modif categorie");
echo 'modif categories';
//exit();
?>
