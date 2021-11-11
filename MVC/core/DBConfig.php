<?php 
class Database{
const HOST = 'localhost';
const USERNAME ='root';
const PASSWORD ='';
const DB_NAME = 'phpweb';
protected $con;
public function connect(){
    $con = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
    mysqli_set_charset($con, "utf8");
    if(mysqli_connect_errno() === 0){
    return $con;
    }
    return false;
}

}
?>