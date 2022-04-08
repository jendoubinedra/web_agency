<?php 

require_once('../Model/categories.class.php');

$categorie = new categorie($_POST['nomc']);

$categorie->supprimer();
header("Location:../liste-categories.php?resultat= supp categories");
echo 'supp categories';
//exit();
?>
