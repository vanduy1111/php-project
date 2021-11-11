<?php 

class ModController extends BaseController {
    private $usModel;
    private $ProductModel; 
    public function __construct()
    {

      $this->Loadmodel('AdminModel');
      $this->AdminModel = new AdminModel;
      $this->Loadmodel('ProductModel');
      $this->ProductModel = new ProductModel;
   
    }
   
public function index(){
    $selectcolum = ['id','username','password,position'];
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
  $username = $this->AdminModel->getusername( $_SESSION['userAdmin'] );


  $total =  count($totalproduct);
    $totalpage =ceil($total/$productlist);
      $product = $this->AdminModel->getALL($selectcolum,$sort,$productlist,$offset);
    

  return     $this->viewadmin('admin.mod.mod',
  ['product' => $product,'totalpage' => $totalpage,'page' => $page, 'total' => $total,'username' =>  $username]);
 
}
public function delete(){
  $id = $_GET['id'];
  $this->AdminModel->delete($id);
  header('location:index.php?file=admin&contronllers=mod');
}
public function formupdate(){
  $this->viewadmin('admin.mod.update');
}
public function update(){
if(isset($_POST['submit'])&& ($_POST['username']) != '' && ($_POST['password']) != '' 
){
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$data = [
  'username' => $username,
  'password' => $password,
  'position' => $position,

];
$this->AdminModel->updatee($id,$data);
header('location:index.php?file=admin&contronllers=mod');
}
}
public function forminsert(){
  $this->viewadmin('admin.mod.insert');
}
public function insert(){
  if(isset($_POST['submit']) && ($_POST['username']) != '' && ($_POST['password']) != '' ){
$username = $_POST['username'];
$password = $_POST['password'];
$position = $_POST['position'];
$data = [
  'username' => $username,
  'password' => $password,
  'position' => $position,
];
$this->AdminModel->insert($data);
header('location:index.php?file=admin&contronllers=mod');
}else{
  $mess = 'Chưa điền đầy đủ thông tin';
  $this->viewadmin('admin.mod.insert' ,['mess' => $mess]  );
}
}
    }

?>