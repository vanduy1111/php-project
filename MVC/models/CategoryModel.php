<?php  
class CategoryModel extends BaseModel
{
    const TABLE = 'category';





public function getproduct(){
  $sql = "SELECT * FROM ". self::TABLE ."";

  return $this->getByQuery($sql);
}
public function getloai($table){
  $sql = "SELECT * FROM $table";
  
  return $this->getByQuery($sql);
}



}
?>