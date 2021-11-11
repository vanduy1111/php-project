 <?php
class HomeController extends BaseController {

	private $ProductModel; 
  private $chatModel; 
	public function __construct()
{
  $this->Loadmodel('ProductModel');
  $this->ProductModel = new ProductModel;
  $this->Loadmodel('chatModel');
  $this->chatModel = new chatModel;
}


public function index(){
  $selectcolum = ['id','image','producer','category_id'];
  $sort =   ['colum' => 'id' ,'order' => 'desc'];
  $product = $this->ProductModel->getslider($selectcolum,$sort,'8','0');
 
   $moinhat = $this->ProductModel->getloai('mới nhất');
   $banchay = $this->ProductModel->banchay(4,0);
   $cugiare = $this->ProductModel->getloai('cũ giá rẽ');
  
       $this->view('home.home',	
      ['moinhat' => $moinhat,
      'banchay' => $banchay,
     'product' => $product,
      'cugiare' => $cugiare,
     
     
      ]);
  }
  public function chat(){
    if(isset($_POST['submit']) && isset($_POST['fullname']) && isset($_POST['numberphone']) && isset($_POST['chat']) ){
   
   $fullname =   $_POST['fullname'];
   $numberphone =    $_POST['numberphone'];
   $chat =    $_POST['chat'] ;
      $data = [ 
        'fullname' => $fullname,
        'numberphone' =>  $numberphone,
        
        'chat' =>  $chat ];
  $this->chatModel->insert($data);
      $this->view('welcome.welcome');
  }

	
}

}

?>