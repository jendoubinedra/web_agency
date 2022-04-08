<?php 

require_once('../Model/Admin.class.php');

$admin = new admin($_POST['nom'],$_POST['login'], $_POST['email'], $_POST['password']);

$admin->ajouter();
header("Location:../liste-Admin.php?resultat= ajouter admin");
//echo "oui";
//exit();
?>
