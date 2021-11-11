<?php 

class cartController extends BaseController {
  private $usModel;
  
  private $ProductModel; 
public function __construct()
{


  $this->Loadmodel('ProductModel');
  $this->ProductModel = new ProductModel;

  $this->Loadmodel('usModel');
  $this->usModel = new usModel;
}

public function index(){
  
    $user =   $this->usModel->getusername($_SESSION['username']);
    
  $productId = $_GET['id'] ?? null;
  $product = $this->ProductModel->getproductid($productId);
  if(empty($_SESSION['cart']) || !array_key_exists($productId, $_SESSION['cart'])){
     $product['qty'] = 1;
   $_SESSION['cart'][$productId] = $product;

 }else{
   $product['qty'] =  $_SESSION['cart'][$productId]['qty'] + 1;
   $_SESSION['cart'][$productId]  = $product;
   
 } 
 
 $product = $_SESSION['cart'];
 $this->view('cart.cart',[
 'product' => $product,'user' => $user
 
 ]);

}

public function delete(){

  $user =   $this->usModel->getusername($_SESSION['username']);
$productId = $_GET['id'] ?? null ;
unset($_SESSION['cart'][$productId]);
$product = $_SESSION['cart'];
$this->view('cart.cart',[
  'product' => $product,'user' => $user 

  ]
  );
  
}

public function update(){

  $user =   $this->usModel->getusername($_SESSION['username']);

  if(isset($_POST['qty'])){
    foreach ($_POST['qty'] as $productId => $qty ){
 
      if(isset( $_SESSION['cart'][(int)$productId]['qty'])){
  if($qty <= 0){
    unset( $_SESSION['cart'][(int)$productId]);
  }else{ 
    $_SESSION['cart'][(int)$productId]['qty'] = $qty;}
  }
      }
      $product = $_SESSION['cart'];
      $this->view('cart.cart',[
      'product' => $product,'user' => $user 
   
      ]
      );

  }else {
 
   
    header('location:index.php?trangchu' ); 
  }




}
public function destroy(){
unset($_SESSION['cart']);
$product = $_SESSION['cart'] ?? [];
$this->view('cart.cart',[
'product' => $product,]);
}
public function deleteall(){
  session_destroy();  
}
}

?>