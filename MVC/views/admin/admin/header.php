<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
  
    .menu ul li  a p{
        padding-top: 5px; padding-left: 2rem; color: black;height: 1.5rem ; text-decoration: none;
    }
    .menu a{
        text-decoration: none;
    }
    .menu a :hover{
        color: red;
    }
    .menu2 ul li  {

padding-top: 20px;
list-style: none;
float: left;
margin-left: 30px;
    }
    .menu2 ul li a{
        color: white;
        text-decoration: none;
        font-weight: 600;
    }
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
<header class="container-fluid col-12" style="height: 100px; background-color: #212529; padding: 0px; margin: 0px; float: left;">
<div class="col-3" style="height: 90px;float: left;" >
<h1><a href="http://localhost/phpweb/"style="color: white;text-decoration: none ;">Trang chủ</a></h1>
</div>
<div class="menu2 col-8 "    >
<ul>
    <li>
     <a href="?file=admin&contronllers=Dienthoai">
SẢN PHẨM
     </a>
    </li>
   
    <li>
     <a href="?file=admin&contronllers=user">

 TÀI KHOẢN
     </a>
    </li>
    <li>
     <a href="?file=admin&contronllers=order">

ORDER
     </a>
    </li>
    <li>
     <a href="index.php?file=admin&contronllers=QuesTion">

CÂU HỎI
     </a>
    </li>
</ul>
</div>
<div class="col-3" style="float: right; margin-top: 20px;">
<?php if(isset($_SESSION['userAdmin'])){ ?>
   <label style="color: white;"><?php print(strtoupper($_SESSION['userAdmin'])); ?> </label>  

     <a href="?file=admin&contronllers=login&action=dangxuat" style="text-decoration: none; margin-left: 10px;"><label>Đăng xuất</label></a>';
<?php } ?>

</div>
</header>

