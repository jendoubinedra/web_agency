<?php 

require_once('../Model/Contact.class.php');

$contact = new contact($_POST['nomcontact'],$_POST['email'],$_POST['sujet'],$_POST['message']);

$contact->supprimer();
header("Location:../liste-contact.php?resultat= email supprimier");
echo 'supp categories';
//exit();
?>