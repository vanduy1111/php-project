<?php 

class userController extends BaseController {
  private $usModel;

public function __construct()
{
	$this->Loadmodel('usModel');
  $this->usModel = new usModel;
}

public function index(){

 $user =   $this->usModel->getusername($_SESSION['username']);
    $this->view('user.user' ,['user' => $user]);

    }
    public function form(){
      $this->view('login.doipass' );
    } 
    public function doipass(){
      $mess = false;
      if(isset($_POST['add']) && isset($_POST['password']) && isset($_POST['repass'])){
   if($_POST['password'] != $_POST['repass']){
    $this->view('login.doipass' ,['mess' => $mess] );
   }else {
    $password = $_POST['password'];
    $data = ['password' => $password];
$this->usModel->updatee($_SESSION['username'],$data);
    $this->index();
   }
      }
     
    }
    }
  



?>