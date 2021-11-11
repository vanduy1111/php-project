<?php  
class ProductModel extends BaseModel
{
    const TABLE = 'product';
    const TABLEE ='category';
    public function getALL($select =['*'],$oderby = [],$limit =15,$offset)
  {
    return $this->all(self::TABLE,$select,$oderby,$limit,$offset);
    
  }
  public function search($name,$limit,$offset){
    $sql = "SELECT * FROM  ". self::TABLE ." WHERE name LIKE '%${name}%' ORDER BY id LIMIT ${limit} OFFSET ${offset} ";

return    $this->getByQuery($sql);
    
      }



      
      public function search1($name){
        $sql = "SELECT * FROM  ". self::TABLE ." WHERE  (name   LIKE '%${name}%') ORDER BY id  ";
  


      return  $this->getByQuery($sql);
          } 

  public function getslider($select =['*'],$oderby = [],$limit =15,$offset)
  {
    return $this->all(self::TABLEE,$select,$oderby,$limit,$offset);
 
    
  }

  public function getProductId($id){
    $sql = "SELECT * FROM ". self::TABLE ." WHERE   id='${id}' ";
  return $this->getByQuery($sql);

}
// phone 1
public  function getProductCategory($id){
  $sql = "SELECT product.*,category.producer as category_name FROM ". self::TABLE ." 
  JOIN category ON category.category_id = product.category_id
  WHERE   product.id='${id}' " ;


  return $this->getFirstByQuery($sql);
}
public function banchay($productlist,$offset){
  $sql = "SELECT order_details.product_name, SUM(order_details.product_qty),order_details.product_id,
  product.name,product.id,product.price,product.chip,product.ram,product.Capacity,product.installment,product.image,product.sale,product.gift
  FROM order_details, product
  WHERE order_details.product_id = product.id
          GROUP BY product_name  ORDER BY SUM(order_details.product_qty) DESC LIMIT ${productlist} OFFSET ${offset}";

  return $this->getByQuery($sql);
}
public  function getProductCate($id,$table){

 $sql = "SELECT product.*,${table}.producer  FROM ". self::TABLE ." 
 JOIN ${table} ON ${table}.${table}_id = product.${table}_id
 WHERE   ${table}.${table}_id='${id}' ORDER BY id desc ";

  return $this->getByQuery($sql);
}
//home
 public function getloai($category){
  $sql = "SELECT product.*,phanloai.producer as phanloai_name
   FROM ". self::TABLE ." 
   JOIN phanloai ON phanloai.phanloai_id = product.phanloai_id WHERE phanloai.producer='${category}' limit 4";
   
   return $this->getByQuery($sql);
}
// get loai
public function getCategory($category,$table,$productlist,$offset){
  $sql = "SELECT product.*,${table}.producer 
   FROM ". self::TABLE ." 
   JOIN ${table} ON ${table}.${table}_id = product.${table}_id WHERE ${table}.producer='${category}'  ORDER BY id limit ${productlist} OFFSET ${offset}  ";

   return $this->getByQuery($sql);
  
   
}
// get menu
public function getproduct($phanloai,$category){

    $sql = "SELECT * FROM ". self::TABLE ." WHERE ${category}_id = $phanloai ";
  
  return $this->getByQuery($sql);
}
// muc gia 
public function getprice($min,$max, $productlist,$offset){
  $sql = "SELECT * FROM `product` WHERE price < $min AND price > $max LIMIT $productlist OFFSET $offset";


  return $this->getByQuery($sql);
}
public function get($table){
  $sql = "SELECT * FROM $table";

  return $this->getByQuery($sql);
}


  public function find($id){
    return $this->finByID(self::TABLE,$id);
  }
  public function insert($data){
    $this->store(self::TABLE,$data);
  
  }
  public function updatee($id,$data){
    $this->update1(self::TABLE,$id,$data);
  }
  public function delete($id){
    $this->delete1(self::TABLE,$id);
  }

}
?>