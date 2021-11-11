<?php 
class BaseModel extends Database{
    protected $con;
public function __construct()
{
$this->con = $this->connect();
}




public function all($table,$select =['*'],$oderby = ['name' => 'asc'] ,$limit =15,$offset){

   $colum = implode(',',$select); 
   $oderbyString = implode(' ',$oderby);
if($oderbyString){
    $sql = "SELECT ${colum} FROM ${table} ORDER By ${oderbyString}  LIMIT ${limit} OFFSET ${offset}";
   
}else{
    $sql = "SELECT ${colum} FROM ${table} LIMIT ${limit} ";
}
  
    $query = $this->_query($sql);
    $data =[];
    while($row = mysqli_fetch_assoc($query)){
       array_push($data,$row);
    }
    return $data;
}
public function getFirstByQuery($sql){
    $query = $this->_query($sql);
    return mysqli_fetch_assoc($query);
}


 public function finByID($table,$id){
    $sql = "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
    $query = $this->_query($sql);
    return mysqli_fetch_assoc($query);
}   


public function getByQuery($sql){ 
    
    $query = $this->_query($sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($query)){
        array_push($data,$row);
    }
    return $data;
}




public function store($table,$data = []){
    $colum =  implode(',',array_keys($data));
    $values = array_map(function($value){
        return "'" . $value . "'";
    },array_values($data));
    $values = implode(',' ,$values);


    $sql ="INSERT INTO ${table}(${colum}) VALUES(${values}) ";

    $this->_query($sql);
    
} 
public function update1($table,$id,$data){
    $dataSet = [];
    foreach ($data as $key => $val){
        array_push($dataSet,"${key} = '". $val ."'");
    }


   $dataString = implode(',',$dataSet);
    $sql = "UPDATE ${table} SET ${dataString} WHERE id = ${id} ";
  

    $this->_query($sql);
} 
public function update2($table,$username,$data){
    $dataSet = [];
    foreach ($data as $key => $val){
        array_push($dataSet,"${key} = '". $val ."'");
    }


   $dataString = implode(',',$dataSet);
    $sql = "UPDATE ${table} SET ${dataString} WHERE username = '${username}' ";


    $this->_query($sql);
} 
public function delete1($table,$id){

   $sql = "DELETE FROM ${table} WHERE id = ${id}";
   $this->_query($sql); 
} 
public function create($table, $data = []){
    $colums = implode(',', array_keys($data));

    $newValues = array_map(function($value){
return "'" .$value . "'";
    }, array_values($data));

    $newValues = implode(',', $newValues);
    $sql = "INSERT INTO ${table}(${colums}) VALUES (${newValues})";

    $this->_query($sql); 
    return $this->getFirstByQuery("SELECT * FROM ${table} ORDER BY ID DESC LIMIT 1");
}
private function _query($sql){
    return mysqli_query($this->con,$sql);
 }


}
?>