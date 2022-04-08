<?php 

require_once('../Model/inscri.class.php');

$inscri = new inscri($_POST['nomclient'],$_POST['nom_entreprise'], $_POST['matricule_fiscal']
, $_POST['email_c'], $_POST['login_c'], $_POST['adresse'], $_POST['tel'], $_POST['password']);

$inscri->ajouter();
//header("Location:../liste-devis.php?resultat=ajouter un client");
//echo "oui";
//exit();
?>
