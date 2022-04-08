<?php 

require_once('../Model/Contact.class.php');
$contact = new contact($_POST['nomcontact'],$_POST['email'],
$_POST['sujet'],$_POST['message']);
$contact->ajouter();
header("Location:../contact.php?resultat=email envoyer avec succes");
echo "oui";
//exit();
?>
