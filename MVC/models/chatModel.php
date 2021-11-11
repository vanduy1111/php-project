<?php 
class chatModel extends BaseModel{
    const TABLE = 'chat';
    
    public function insert($data){
      $this->store(self::TABLE,$data);

        
      
      }
      public function getALL($select =['*'],$oderby = [],$limit =15,$offset)
      {
        return $this->all(self::TABLE,$select,$oderby,$limit,$offset);
        
      }
  
 
 
 

}
?>