<?php
class Service{
private $noms;
private $desc;
private $image;
private $prix;
private $categorie;



function __construct($noms,$desc,$image,$prix,$categorie){
$this->noms = ($noms);
$this->desc = ($desc);
$this->image = ($image);
$this->prix = ($prix);
$this->categorie = ($categorie);


}

public function ajouter(){ 

include('../includes/connect_db.php');

		
		$req = $bdd->exec("INSERT INTO `service`(`noms`, `desc`, `image`, `prix`,`categorie`) values('$this->noms','$this->desc','$this->image','$this->prix','$this->categorie')");
		
		echo 'oui';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `service` SET `noms`='$this->noms',`desc`='$this->desc',`image`='$this->image',`prix`='$this->prix',`categorie`='$this->categorie' WHERE ids = $id ");
				
        
        echo'modifier effectue avec succes';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM service WHERE ids=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>