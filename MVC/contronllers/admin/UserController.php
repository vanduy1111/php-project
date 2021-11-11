<?php 

class UserController extends BaseController {
    private $usModel;
    private $ProductModel; 
    public function __construct()
    {

      $this->Loadmodel('usModel');
      $this->usModel = new usModel;
      $this->Loadmodel('ProductModel');
      $this->ProductModel = new ProductModel;
   
    }
   
public function index(){
    $selectcolum = ['id','username','password','numberphone','address'];
  $sort =   ['colum' => 'id' ,'order' => 'desc'];
  if(isset($_GET['page'])){
    $page  =  $_GET['page'];  
    $productlist = $_GET['per'];
  }else {
    $page = 1;
    $productlist = 6;
  }
  $offset = (($page -1) * 6);
  $totalproduct = $this->ProductModel->get('user');
  $total =  count($totalproduct);
    $totalpage =ceil($total/$productlist);
      $product = $this->usModel->getAll($selectcolum,$sort,$productlist,$offset);
    

  return     $this->viewadmin('admin.user.user',
  ['product' => $product,'totalpage' => $totalpage,'page' => $page, 'total' => $total]);
 
}
public function delete(){

  $id = $_GET['id'];
  $this->usModel->delete($id);
   $this->index();

}
public function formupdate(){
  $this->viewadmin('admin.user.update');
}
public function update(){
if(isset($_POST['submit']) && isset($_POST['username']) != '' && isset($_POST['password']) != '' 
&& isset($_POST['numberphone']) != '' && isset($_POST['address']) != ''){
$id = $_POST['id'];
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
$this->usModel->updatee($id,$data);
return $this->index();
}
}
public function forminsert(){
  $this->viewadmin('admin.user.insert');
}
public function insert(){
  if(isset($_POST['submit']) && isset($_POST['username']) != '' && isset($_POST['password']) != '' 
&& isset($_POST['numberphone']) != ''){
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
$this->usModel->insert($data);
return $this->index();
}
}
    }

?>