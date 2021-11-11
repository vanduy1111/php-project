<?php 

class Registercontroller extends BaseController {
  private $usModel;

public function __construct()
{
	$this->Loadmodel('usModel');
  $this->usModel = new usModel;
}
public function viewReigister(){
  $this->view('reigister.reigister'
);
}
public function index(){
 

if(isset($_POST['add']) )
{
  if ($_POST['username']  && $_POST['password']
  && $_POST['repass']  && $_POST['numberphone'])  {
   

    
      $username = $_POST['username'];
      $password = $_POST['password'];
      $numberphone = $_POST['numberphone'];
      $address = $_POST['address'];
        $data = [ 
        'username' => $username,
        'password' => $password,
        'numberphone' => $numberphone,
        'address' => $address,
        ];
    $getuser = $this->usModel->getusername($_POST['username']);
        if($password != $_POST['repass']){
          $mess = 'password khác password';
        
        }
       else if($getuser != FALSE){
        $mess = 'Tài khoản đã được sử dụng';
        
        }else{
          $this->usModel->insert($data);
          $mess = 'Đăng ký thành công';
    }
    $this->view('reigister.reigister',
    [ "mess" => $mess ]
    );
    
  }else
  {
    $mess = 'chưa nhập đầy đủ thông tin ';
    $this->view('reigister.reigister',
    [ "mess" => $mess ]
    );
  }
}

}}
?>