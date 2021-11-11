<?php 
class BaseController{
  
  private $headerController;
  const VIEW_FOLDER_NAME = 'views';
  const MODEL_FOLDER_NAME = 'MODELs';
 
    protected function view($viewPath,array $data = [])
    {
         foreach($data as $key => $value){
        $$key = $value;
      }
      require "./MVC/views/header.php";
          require ('./MVC/'.self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/',$viewPath).'.php');
          include "./MVC/views/footer.php";
 
    }
    protected function Loadmodel($modelPath)
    {
   require ('./MVC/'.self::MODEL_FOLDER_NAME . '/' . $modelPath.'.php');
    }
    protected function viewadmin($viewPath,array $data = [])
    {
         foreach($data as $key => $value){
        $$key = $value;
      }
if(!isset( $_SESSION['userAdmin']))
{
  require './MVC/views/admin/admin/login.php';
}
 else{
    require './MVC/views/admin/admin/header.php';
          require ('./MVC/'.self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/',$viewPath).'.php');
 }
      
 
    }
   
}


?>

