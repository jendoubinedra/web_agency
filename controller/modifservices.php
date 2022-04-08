<?php 

require_once('../Model/services.class.php');

$service = new service($_POST['noms'],$_POST['desc'], $_POST['image'], $_POST['prix'],$_POST['categorie']);

$service->modifier();
header("Location:../liste-services.php?resultat=modif services");
echo 'oui';
//exit();
?>
