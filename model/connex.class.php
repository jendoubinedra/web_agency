<?php
class Connex{
private $login;
private $password;

        
function __construct($login,$password){
$this->login = $login;
$this->password = md5($password);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM admin WHERE login = '$this->login' AND password = '$this->password'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  //header('location:../loginEtudiant.php?mess=error');
  echo "non";
  
}
   else
{
       session_start();
       $_SESSION['id'] = $resultat['id'];  
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['login'] = $resultat['login'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       
	  //test 
	header('location:../liste-admin.php');


} 

}
}


$admin = new Connex($_POST['login'],$_POST['password']);


?>