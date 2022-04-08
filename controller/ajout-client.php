<?php 

require_once('../Model/client.class.php');

$client = new client($_POST['nomclient'],$_POST['nom_entreprise'], $_POST['matricule_fiscal']
, $_POST['email_c'], $_POST['login_c'], $_POST['adresse'], $_POST['tel']);

$client->ajouter();
header("Location:../liste-clients.php?resultat=ajouter un client");
echo "oui";
//exit();
?>
