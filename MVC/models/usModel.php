<?php 
class usModel extends BaseModel{
    const TABLE = 'user';
    public function getALL($select =['*'],$oderby = [],$limit =15,$offset)
    {
      return $this->all(self::TABLE,$select,$oderby,$limit,$offset);
      
    }
  public function insert($data){
    $this->store(self::TABLE,$data);
  
  }
  public function getusername($username){
    $sql = "SELECT * FROM ". self::TABLE ." WHERE   username='${username}' LIMIT 1 ";

  return $this->getByQuery($sql);
  
  }
  public function login($username,$password){
    $sql = "SELECT * FROM ". self::TABLE ." WHERE   username='${username}' AND password='${password}' LIMIT 1 ";


  return $this->getByQuery($sql);
  
  }

  public function loginAdmin($username,$password){
    $sql = "SELECT * FROM adminuser WHERE   username='${username}' AND password='${password}' LIMIT 1 ";

    
  return $this->getByQuery($sql);
  
  }
  public function delete($id){
    $this->delete1(self::TABLE,$id);
  }
  public function updatee($username,$data){
 $product =   $this->update2(self::TABLE,$username,$data);
  }

}
?>