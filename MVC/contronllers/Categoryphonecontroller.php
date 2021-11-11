<?php
 
class Categoryphonecontroller extends BaseController {

	private $ProductModel; 


	public function __construct()
{
  $this->Loadmodel('ProductModel');
  $this->ProductModel = new ProductModel;

}

public function index(){
 
  $selectcolum = ['id','name','price','chip','ram','Capacity','installment','image'];
  $sort =   ['colum' => 'id' ,'order' => 'desc'];

  if(isset($_GET['page'])){
    $page  =  $_GET['page'];  
    $productlist = $_GET['per'];
  }else {
    $page = 1;
    $productlist = 6;
  }
  $offset = (($page -1) * 6);

  // muc gia
  if(isset($_GET['min']) && isset($_GET['max'])){
      $totalproduct = $this->ProductModel->getprice($_GET['min'],$_GET['max'],100000,0);
      $product = $this->ProductModel->getprice($_GET['min'],$_GET['max'],$productlist,$offset);
  }
 //  ban chay
 else if(isset($_GET['table']) == 'banchay' && empty($_GET['loai'])){
  $totalproduct = $this->ProductModel->banchay($productlist,$offset);
  $product = $this->ProductModel->banchay($productlist,$offset);
 }
// danh muc
 else if(isset($_GET['table']) && $_GET['table'] == 'phanloai' && isset($_GET['loai'])){
   $category = $_GET['loai'];
   $table = $_GET['table'];
   $totalproduct = $this->ProductModel->getProductCate($_GET['id'],$table);

   $product =  $this->ProductModel->getCategory($category,$table,$productlist,$offset);
  
   // hang san xuat
 } else  if(isset($_GET['table']) && $_GET['table'] == 'category' && isset($_GET['loai'])){
  $category = $_GET['loai'];
  $table = $_GET['table'];
  $totalproduct = $this->ProductModel->getProductCate($_GET['id'],$table);
  $product =  $this->ProductModel->getCategory($category,$table,$productlist,$offset);
  // tat ca
}else{
  $totalproduct =  $this->ProductModel->getALL($selectcolum,$sort,100000,0  );
  $product =  $this->ProductModel->getALL($selectcolum,$sort,$productlist,$offset  );
 }
 $total =  count($totalproduct);
    $totalpage =ceil($total/$productlist);
    $this->view1($product,$totalpage,$page,$total);

}

 
  


public function view1($product,$totalpage,$page,$total){
  $select = ['id','image','producer','category_id'];
  $sorttt =   ['colum' => 'id' ,'order' => 'desc'];
  $productcate = $this->ProductModel->getslider($select,$sorttt,'100','0');
   $this->view('Categoryphone.Categoryphone',
  ['product' => $product,'totalpage' => $totalpage,'page' => $page, 'total' => $total,'productcate' => $productcate]);

 
    
}
public function search(){

 if(isset($_POST['search'])){
$name = $_POST['search'];
  if(isset($_GET['page'])){
    $page  =  $_GET['page'];  
    $productlist = $_GET['per'];
  }else {
    $page = 1;
    $productlist = 6;
  }
   $totalproduct = $this->ProductModel->search1($name);
  $offset = (($page -1) * 6);
  $product = $this->ProductModel->search($name,$productlist,$offset);
   $total =  count($totalproduct);
    $totalpage =ceil($total/$productlist);
$this->view1($product,$totalpage,$page,$total);
 }

}


	}




?>