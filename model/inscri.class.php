<?php
class Inscri{
private $nomclient;
private $nom_entreprise;
private $matricul_fiscal;
private $email_c;
private $login_c;
private $adresse;
private $tel;
private $password;



function __construct($nomclient,$nom_entreprise,$matricule_fiscal,$email_c,$login_c,$adresse,$tel,$password){
$this->nomclient = ($nomclient);
$this->nom_entreprise = ($nom_entreprise);
$this->matricule_fiscal = ($matricule_fiscal);
$this->email_c = ($email_c);
$this->login_c = ($login_c);
$this->adresse = ($adresse);
$this->tel = ($tel);
$this->password = md5($password);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nomclient`, `nom_entreprise`, `matricule_fiscal`, `email_c`,`login_c`,`adresse`,`tel`,`password`) values('$this->nomclient','$this->nom_entreprise','$this->matricule_fiscal','$this->email_c','$this->login_c','$this->adresse','$this->tel','$this->password')");
		
		echo 'client ajouter avec succes';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `nomclient`='$this->nomclient',`nom_entreprise`='$this->nom_entreprise',`matricule_fiscal`='$this->matricule_fiscal',`email_c`='$this->email_c'
        ,`login_c`='$this->login_c',`adresse`='$this->adresse',`tel`='$this->tel' WHERE id = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>