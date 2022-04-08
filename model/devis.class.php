<?php
class Devis{
private $titre;
private $description;
private $nature;
private $date_limite;
private $email;
private $telephone;




function __construct($titre,$description,$nature,$date_limite,$email,$telephone){
$this->titre = ($titre);
$this->description = ($description);
$this->nature = ($nature);
$this->date_limite = ($date_limite);
$this->email = ($email);
$this->telephone = ($telephone);



}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `devis`(`titre`, `description`, `nature`, `date_limite`,`email`,
        `telephone`) values('$this->titre','$this->description','$this->nature','$this->date_limite','$this->email','$this->telephone')");
		
		echo 'devis ajouter avec succes';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        $r=$bdd->exec(" UPDATE `devis` SET `titre`='$this->titre',`description`='$this->description',`nature`='$this->nature',`date_limite`='$this->date_limite'
        ,`email`='$this->email',`telephone`='$this->telephone' WHERE id = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM devis WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>