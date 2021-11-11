<?php 
class ComentModel extends BaseModel{
    const TABLE = 'Coment';
   public function coment($id_product,$limit,$offset){
     $sql = "SELECT coment.id,coment.coment_id,product.id,coment.coment,coment.user_name,coment.time FROM coment,product
     WHERE coment.id = ${id_product} AND product.id = ${id_product} ORDER BY coment.coment_id desc LIMIT ${limit} offset ${offset}  " ;
        return $this->getByQuery($sql);
   }

  public function insert($data){
    $this->store(self::TABLE,$data);
  
  }
  public function insert1($data){
    $this->store('replycoment',$data);
  
  }
  public function delete($id){
    $this->delete1('self::TABLE',$id);
  }
  public function updatee($id,$data){
    $this->update1(self::TABLE,$id,$data);
  }

}
?>