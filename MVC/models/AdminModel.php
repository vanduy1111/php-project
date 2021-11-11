<?php 
class AdminModel extends BaseModel{
    const TABLE = 'adminuser';
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


  public function delete($id){
    $this->delete1(self::TABLE,$id);
  }
  public function updatee($id,$data){
    $this->update1(self::TABLE,$id,$data);
  }

}
?>