<?php
class Admin{
private $nom;
private $login;
private $email;
private $password;



function __construct($nom,$login,$email,$password){
$this->nom = ($nom);
$this->login = ($login);
$this->email = ($email);
$this->password = md5($password);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`nom`, `login`, `email`, `password`) values('$this->nom','$this->login','$this->email','$this->password')");
		
		echo'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom`='$this->nom',`login`='$this->login',`email`='$this->email',`password`='$this->password' WHERE id = $id ");
				
        
        echo'modifier effectue avec succés';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>