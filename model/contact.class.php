<?php
class Contact{
private $nomcontact;
private $email;
private $sujet;
private $message;



function __construct($nomcontact,$email,$sujet,$message){
$this->nomcontact = ($nomcontact);
$this->email = ($email);
$this->sujet = ($sujet);
$this->message = ($message);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `contact`(`nomcontact`, `email`, `sujet`, `message`) values('$this->nomcontact','$this->email','$this->sujet','$this->message')");
		
		echo'oui';
                //return TRUE;
			
}
public function supprimer(){ 
include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM service WHERE idcontact=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}

}

?>