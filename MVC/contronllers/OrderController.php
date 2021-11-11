<?php 
class OrderController extends BaseController{
    protected   $OderModel;
    protected $usModel;
    protected $ProductModel;
    public function __construct()
    {
        $this->Loadmodel('Ordermodel');
        $this->OderModel = new OrderModel   ;
        $this->Loadmodel('ProductModel');
$this->ProductModel = new ProductModel;
  $this->Loadmodel('usModel');
  $this->usModel = new usModel;
    }
    public function store(){
        if(!empty($_SESSION['cart'])){
         
         $order =   $this->OderModel->storeorder($_POST);
         
            foreach($_SESSION['cart'] as $product){
         $store=   $this->OderModel->storeDetail([
                    'user_id' => $order['user_id'],
                    'order_id' => $order['id'],
                    'product_id' => $product[0]['id'],
                    'product_image' => $product[0]['image'],
                    'product_name' => $product[0]['name'] ,
                    'product_price' => $product[0]['price'] ,
                    'product_qty' =>  $product['qty'] ,
                ] );
            }
          
            unset($_SESSION['cart']);
        $this->cartOfMe();
      
        }

    }
    public function cartOfMe(){
        $user =   $this->usModel->getusername($_SESSION['username']);  
        ['user' => $user];
        if(isset($_GET['page'])){
            $page  =  $_GET['page'];  
            $productlist = $_GET['per'];
          }else {
            $page = 1;
            $productlist = 6;
          }
          $offset = (($page -1) * 6);
          $totalproduct = $this->OderModel->cart('orders.status,
          order_details.product_qty,
          orders.customer_address,orders.customer_phone',$user[0]['id'],10000,0);
          $total = count($totalproduct);

          $totalpage =ceil($total/$productlist);
         
          //--------------  
        $order =   $this->OderModel->cart('orders.status,order_details.product_image,order_details.product_price,order_details.product_name,order_details.product_qty,
            orders.customer_name,
            orders.customer_address,orders.customer_phone',$user[0]['id'],$productlist,$offset);
    

            //----------------
            $selectcolum = ['id','name','price','chip','ram','Capacity','installment','image'];
            $sort =   ['colum' => 'id' ,'order' => 'desc'];
            $product = $this->ProductModel->getALL($selectcolum,$sort,5,0);
            $product2 = $this->ProductModel->getALL($selectcolum,$sort,5,5);
            //----------------------------------
            $this->view('cart.cartOfMe',['order'  => $order,'product' => $product,'product2' => $product2
            ,'totalpage' => $totalpage,'page' => $page
            ]);
        
        

    }

}

?>