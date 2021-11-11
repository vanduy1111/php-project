<?php 

if(isset($_REQUEST['file'] ))   {
    $_REQUEST['file'] == 'admin';
    $actionname = $_REQUEST['file'] ?? 'admin';
$controllername = ucfirst((strtolower($_REQUEST['contronllers'] ?? 'admin').'controller') );
$actionname = $_REQUEST['action'] ?? 'index';
require "./MVC/contronllers/admin/${controllername}.php";
$controllerOB = new $controllername;
$controllerOB->$actionname();

}else{
    $controllername = ucfirst((strtolower($_REQUEST['contronllers'] ?? 'home').'controller') );
$actionname = $_REQUEST['action'] ?? 'index';
require "./MVC/contronllers/${controllername}.php";


$controllerOB = new $controllername;

$controllerOB->$actionname();

}

  
?>