<?php 
class DienThoaiController extends BaseController {
    private $ProductModel;  
    private $CategoryModel;
    public function __construct()
    {
      $this->Loadmodel('ProductModel');
      $this->ProductModel = new ProductModel;
      $this->Loadmodel('CategoryModel');
      $this->CategoryModel = new CategoryModel;
    }
    public function index(){
      $selectcolum = ['id','name','image','price'];
      $sort =   ['colum' => 'id' ,'order' => 'desc'];
    
 // phan trang
      if(isset($_GET['page'])){
        $page  =  $_GET['page'];  
        $productlist = $_GET['per'];
      }else {
        $page = 1;
        $productlist = 6;
      }
      $offset = (($page -1) * 6);
// show danh muc
         $getloai = $this->CategoryModel->getloai('phanloai');
         $getcate = $this->CategoryModel->getloai('category');


//  ban chay
         if(isset($_GET['table']) == 'banchay' && empty($_GET['loai'])){
          $totalproduct = $this->ProductModel->banchay($productlist,$offset);
        
      
          $product = $this->ProductModel->banchay($productlist,$offset);
         }
    // danh muc
         else if(isset($_GET['table']) == 'phanloai' && isset($_GET['loai'])){
           $category = $_GET['loai'];
           $table = $_GET['table'];
           $totalproduct = $this->ProductModel->getProductCate($_GET['id'],$table);
 
           $product =  $this->ProductModel->getCategory($category,$table,$productlist,$offset);
           // hang sanh xuat
         } else  if(isset($_GET['table']) == 'category' && isset($_GET['loai'])){
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
return $this->viewadmin('admin.dienthoai.getall', ['product' => $product,'getloai' => $getloai,'totalpage' => $totalpage,'page' => $page,
'getcate' => $getcate]);
 }


public function forminsert(){
 
  $getloai = $this->CategoryModel->getloai('phanloai');
  $getcate = $this->CategoryModel->getloai('category');
  return $this->viewadmin('admin.dienthoai.insertt',
['getloai' => $getloai , 'getcate' => $getcate]
);

}
   public function insert(){
 
  
    if(isset($_POST['add'])){
       $name = $_POST['name'];
       $sale = $_POST['sale'];
       $image = $_POST['image'];
       $image2 = $_POST['image2'];
       $image3 = $_POST['image3'];
       $price = $_POST['price'];
       $category_id = $_POST['category_id'];
       $chip = $_POST['chip'];
       $ram = $_POST['ram'];
       $Capacity = $_POST['Capacity'];
       $installment = $_POST['installment'];
       $phanloai_id = $_POST['phanloai_id'];
       $gift = $_POST['gift'];
       $video = $_POST['video'];
     $data = [ 
     'name' => $name ,
   'sale' => $sale ,
   'image' => $image, 
   'image2' => $image2, 
   'image3' => $image3, 
   'price' => $price ,
   'category_id' => $category_id ,
   'chip' => $chip,
   'ram' => $ram,
   'Capacity	' => $Capacity,
   'installment' => $installment,
   'phanloai_id' => $phanloai_id,
   'gift' => $gift,
   'video' => $video,
   
   ];
 $this->ProductModel->insert($data);
 $this->index();
    }
   
       }

       public function formupdate(){
 
        $getloai = $this->CategoryModel->getloai('phanloai');
        $getcate = $this->CategoryModel->getloai('category');
        return $this->viewadmin('admin.dienthoai.update',
      ['getloai' => $getloai , 'getcate' => $getcate]
      );
      
      }
       public function update(){
    
        if(isset($_POST['add'])){
          $id = $_POST['id'];
          $name = $_POST['name'];
          $sale = $_POST['sale'];
          $image = $_POST['image'];
          $image2 = $_POST['image2'];
          $image3 = $_POST['image3'];
          $price = $_POST['price'];
          $category_id = $_POST['category_id'];
          $chip = $_POST['chip'];
          $ram = $_POST['ram'];
          $Capacity = $_POST['Capacity'];
          $installment = $_POST['installment'];
          $phanloai_id = $_POST['phanloai_id'];
          $gift = $_POST['gift'];
          $video = $_POST['video'];
          $data = [ 
              'name' => $name ,
                'sale' => $sale ,
                'image' => $image, 
                'image2' => $image2, 
                'image3' => $image3, 
                'price' => $price ,
                'category_id' => $category_id ,
                'chip' => $chip,
                'ram' => $ram,
                'Capacity	' => $Capacity,
                'installment' => $installment,
                'phanloai_id' => $phanloai_id,
                'gift' => $gift,
                'video' => $video,
                 ];
                 $this->ProductModel->updatee($id,$data);
        }   
        $getloai = $this->CategoryModel->getloai('phanloai');
        $getcate = $this->CategoryModel->getloai('category');
        return $this->viewadmin('admin.dienthoai.insert',
      ['getloai' => $getloai , 'getcate' => $getcate]
      );
        }
   public function delete(){
    $id = $_GET['id'];
    $this->ProductModel->delete($id);
   $this->index();
   }

         
      }



?>