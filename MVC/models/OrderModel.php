<?php 
class OrderModel extends BaseModel{
    const TABLE = 'orders';
    
    public function storeorder($input){
    return    $this->create(self::TABLE,[
       'user_id' => $input['user_id'],
        'code' => rand(100,1000000) ,
        'customer_name' => $input['customer_name'],
        'customer_phone' => $input['customer_phone'] ,
        'customer_address' => $input['customer_address'] ,
        'status' => $input['status'] ,

        'created_at' => 'CURRENT_TIME()'

      ]);
     
      } 
      public function storeDetail($input){
     $order =   $this->create('order_details',[
         'user_id' => $input['user_id'],
          'order_id' => $input['order_id'],
          'product_id' => $input['product_id'],
          'product_image' => $input['product_image'],
          'product_name' => $input['product_name'] ,
          'product_price' => $input['product_price'] ,
          'product_qty' =>  $input['product_qty'] ,
  
        ]);

      }
      public function cart($get,$user,$limit,$ofset){
        $sql = "SELECT ${get} FROM orders,order_details,user
        WHERE 		order_details.user_id = ${user}
                    AND
                orders.user_id = ${user} AND user.id = ${user} AND  orders.id = order_details.order_id LIMIT $limit OFFSET $ofset "  ;

                return $this->getByQuery($sql);
      }
      public function cartadmin($table){
        $sql = "SELECT ${table}
         FROM orders,order_details
        WHERE 		order_details.order_id = orders.id ORDER BY id desc "  ;

                return $this->getByQuery($sql);
      }
      public function cartadmin1($table,$loai){
        $sql = "SELECT ${table}
        FROM orders,order_details WHERE order_details.order_id = orders.id AND orders.status = '${loai}' ORDER BY id desc "  ;

                return $this->getByQuery($sql);
      }
    public function banchay(){
        $sql = "SELECT product_name, SUM(product_qty) FROM order_details 
        GROUP BY product_name ";
        
        return $this->getByQuery($sql);
    }
    public function updatee($id,$data){
     $sql = $this->update1(self::TABLE,$id,$data);

    }
   
 
 

}
