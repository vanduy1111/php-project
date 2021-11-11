<?php 
require './MVC/contronllers/HomeController.php';
class LoginController extends BaseController {
  private $usModel;


public function __construct()
{
	$this->Loadmodel('usModel');
  $this->usModel = new usModel;


}

public function viewlogin(){
  $this->view('login.login');
}
public function login(){
  $mess = false;

  if(isset($_POST['add']) && isset($_POST['username']) != '' && isset($_POST['password']) != ''){
  $loginn =   $this->usModel->login($_POST['username'],$_POST['password']);
   if ($loginn != false){
    $_SESSION['username'] = $_POST['username']; ; 
 
    header('location:index.php?trangchu' );  
   }else{
     $this->view('login.login',
     ["mess" => $mess
     ]
   );
   }
  }
  
}
public function logout(){
  if(($_GET['lg']) == 'logout'){
    session_destroy();
header('location:index.php?contronllers=login&action=viewlogin');

  }
}
}
?>