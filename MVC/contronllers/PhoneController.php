 <?php class PhoneController extends BaseController {

private $ProductModel; 
private $ComentModel;

public function __construct()
{
$this->Loadmodel('ProductModel');
$this->ProductModel = new ProductModel;
$this->Loadmodel('ComentModel');
$this->ComentModel = new ComentModel;

}

public function index(){
  if(isset($_GET['page'])){
    $page  =  $_GET['page'];  
    $productlist = $_GET['per'];
  }else {
    $page = 1;
    $productlist = 3;
  }
  $offset = (($page -1) * 3);
  $totalproduct = $this->ComentModel->coment($_GET['id'],'10000','0');
              $total =  count($totalproduct);
              $totalpage =ceil($total/$productlist);
        
  // coment
  $coment = $this->ComentModel->coment($_GET['id'],$productlist,$offset);
  // reply



  // show san pham
  $productid = $_GET['id'] ?? $productid = $_POST['id']  ;
  $selectcategory = ['id','image','producer','category_id'];
  $sortcategory =    ['colum' => 'id' ,'order' => 'desc'];
  $product= $this->ProductModel->getProductCategory($productid);
  $slide = $this->ProductModel->getslider($selectcategory,$sortcategory,'8','0');
 
  $this->view('phone.phone',['product' => $product,'coment' => $coment,'slide' => $slide
  ,'page' => $page, 'totalpage' => $totalpage,'total' => $total, 
  ]);
    }

    public function insertconment(){
      $id =$_POST['id'];
     
      if(isset($_POST['submit']) && ($_POST['coment']) != '' && ($_POST['id']) != ''){
        
        if($_POST['coment'] != '' && $_POST['id'] != ''){
       
          $coment = $_POST['coment'];
          $user_name =  $_SESSION['username'];
          $t=time();
        $time = (date("d-m-Y",$t));
  
          $data = [
            'coment' => $coment,
            'id' => $id,
            'user_name' => $user_name,
            'time' => $time
          ];
          $this->ComentModel->insert($data);
   header('location:index.php?contronllers=phone&action=index&id='.$id);  
        }
        header('location:index.php?contronllers=phone&action=index&id='.$id );
      }
   
    }
    public function insertreply(){
      $id = $_GET['id'];
      

        if(isset($_POST['submit']  )){
    
       echo   $reply = $_POST['reply'];
      echo    $username =  $_SESSION['username'];
     echo     $idcmt = $_POST['id_cmt'];
          $t=time();
    echo    $time = (date("d-m-Y",$t));
  
          $data = [
            'reply' => $reply,
            'coment_id' => $idcmt,
            'username' => $username,
            'time' => $time
          ];
        $this->ComentModel->insert1($data);
 

        }
        header('location:index.php?contronllers=phone&action=index&id='.$id );
      
    }
  
}



?>7