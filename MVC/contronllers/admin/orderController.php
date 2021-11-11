<?php 

class orderController extends BaseController {
    private $OrderModel;

    public function __construct()
    {
       

        $this->Loadmodel('ordermodel');
        $this->OrderModel = new OrderModel;
    }
    public function index(){
        $category = 'orders.id,orders.code,orders.customer_name,orders.customer_phone,orders.customer_address
        ,order_details.product_image,order_details.product_name,order_details.product_price,order_details.product_qty,orders.status';

if(isset($_GET['loai'])){
    if($_GET['loai'] == '1')
{
    $loai = 'hết hàng';

}
if(($_GET['loai']) == '2')
{
    $loai = 'đang giao hàng';
}
if(($_GET['loai']) == '3')
{
    $loai = 'đã giao hàng';
}
if(($_GET['loai']) == '4')
{
    $loai = 'gửi yêu cầu';
}
    $order = $this->OrderModel->cartadmin1($category,$loai);
}

            if(!isset($_GET['loai'])){
                $order =   $this->OrderModel->cartadmin($category);

            }
            $this->viewadmin('admin.order.order', ['order' => $order]);
    }
    public  function update(){

    $id = $_POST['id'];
    $status = $_POST['status'];
    $data = ['status' => $status];
    $this->OrderModel->updatee($id,$data);
$this->index();
  

    }

}
   
    
?>