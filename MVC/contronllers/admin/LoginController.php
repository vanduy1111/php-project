<?php 
require_once "./MVC/contronllers/admin/DienThoaiController.php";
class LoginController extends BaseController {
    private $usModel;
    private $DienThoaiController;
    public function __construct()
    {

      $this->Loadmodel('usModel');
      $this->usModel = new usModel;
      $this->DienThoaiController = new DienThoaiController;
    }
    public function viewlogin(){
      $this->viewadmin('admin.admin.login');
    }
    public function dangnhap(){

      $mess = false;
      if(isset($_POST['submit']) && isset($_POST['username']) != '' && isset($_POST['password']) != '' ){
   
        $loginn =   $this->usModel->loginAdmin($_POST['username'],$_POST['password']);
        if($loginn != false){
          $_SESSION['userAdmin'] = $_POST['username']; ; 
          $this->DienThoaiController->index();
        }else{
       
          $this->viewadmin('admin.admin.login',
          ["mess" => $mess
          ]
        );
        }

 }

   
         
      }
      public function dangxuat(){
        session_destroy();
    header('location:index.php?file=admin&contronllers=login&action=viewlogin');
      }

    }

?>