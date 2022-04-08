<?php 

require_once('../Model/services.class.php');

$service = new service($_POST['noms'],$_POST['desc'], $_POST['image'], $_POST['prix'],$_POST['categorie']);

$service->supprimer();
header("Location:../liste-services.php?resultat=supp services");
echo 'oui';
//exit();
?>
