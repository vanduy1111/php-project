<?php 

class QuesTionController extends BaseController {
private $chatModel;

    public function __construct()
    {
       $this->Loadmodel('chatmodel');
       $this->chatModel = new chatModel;

    }
 public function index(){
    $selectcolum = ['fullname,numberphone,chat'];
    $sort =   ['colum' => 'id' ,'order' => 'desc'];
     $question = $this->chatModel->getALL($selectcolum, $sort,100000,0);
 $this->viewadmin('admin.QuesTion.QuesTion' ,['question' => $question] );  

 }
 
}
   
    
?>