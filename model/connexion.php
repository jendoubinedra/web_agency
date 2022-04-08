<?php
class Connexion{
private $login_c;
private $password;

        
function __construct($login_c,$password){
$this->login_c = $login_c;
$this->password = md5($password);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE login_c = '$this->login_c' AND password = '$this->password'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../inscri.php');
  //echo "non";
  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];  
       $_SESSION['nomclient'] = $resultat['nomclient'];
       $_SESSION['nom_entreprise'] = $resultat['nom_entreprise'];
       $_SESSION['matricule_fiscal'] = $resultat['matricule_fiscal'];
       $_SESSION['email_c'] = $resultat['email_c'];
       $_SESSION['login_c'] = $resultat['login_c'];
       $_SESSION['adresse'] = $resultat['adresse'];
       $_SESSION['tel'] = $resultat['tel'];
       $_SESSION['password'] = $resultat['password'];
       
	  //test 
	header('location:../liste.php');


} 

}
}


$client = new Connexion($_POST['login_c'],$_POST['password']);


?>