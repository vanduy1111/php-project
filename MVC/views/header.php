<!DOCTYPE html>
<html lang="en">
<head></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.13.1-web/css/all.min.css">
   
   <style>
        .shopping-mall{
            bottom: 0px;
            font-variant: small-caps;
            
            border-radius: 30px;
          
           
        }
        .shopping-mall >a:hover{
          background-color: rgb(238, 255, 0);
          color: white;
        }
        .shopping-mall>a{
          font-family:courier,arial,helvetica;
            font-size: 40px;
            background-color:rgb(255, 230, 0);
            color:#ff5507d9;
            letter-spacing: .3px;
            text-shadow: 0 0 2px #78b43d;
            text-decoration: none;
            border-bottom: 3px dotted gray;
            margin: 0px;
            padding: 0px 30px;
            border-radius: 20px;
            width: 220px;
           
          
        }
        .shopping-mall h5{
          margin-top: 5px;
            letter-spacing: 5px;
            font-size: 17px;
            color: rgb(1, 126, 216);
            padding: 0px 18px;
            
          text-decoration: none;
        }

        .card-header>a:hover{
          color: red;
        }
       .card-body>h6{
         font-size: 12px;
         color: #333;
         line-height: 1.4;
         float: left;
        
         
       }
       .card-text>h4{
        display: block;
    font-weight: bold;
    line-height: 50px;
    font-size: 19px;
    text-transform: uppercase;
    background-color: #fff;
    padding-left: 400px;
    clear: both;
       }
      .discount{
        color: tomato;
        font-size: 15px;
      }
     .name{
       color: red;
       font-size: 20px;
     }
     .id{
       color:rgb(82, 64, 64);
       font-size: 17px;
     }
     .ll>a{
      display: inline-block;
    padding-right: 20px;
    line-height: 40px;
     }
  
     

     .container-fluid>a{
       margin-top: 30px;
       font-size: 15px;
       display: block;
       text-decoration: none;
       line-height: 30px;
       color: #212529b8;
     }
    .container-fluid>a:hover{
   color: #fff; 
    }
   .menuheader  .fas{
     transition: 0.5s;
      height: 20px;
      width: 90px;
    display: block;
    font-style: italic;
    font-size: 15px;
    padding-bottom: 20px;
    padding-left: 18px;
  
    }
 

   .card-body img:hover{
      transform: scale(1.2);
    }
   .card-body img{
     
     transform: scale(1);
     transition: 1s;

 
   
}
.card-body{
  overflow: hidden;
}
.card-mn img:hover{
      transform: scale(1.1);
    }
   .card-mn img{
     
     transform: scale(1);
     transition: all ease-in-out;
}
.card-mn{
  overflow: hidden;
}
.abc img{
  border-radius: 30px;
}

.gg {
  transform: scale(1);
     transition: 1.2;
}
.gg:hover{
  overflow: hidden;
  transform: scale(1.1);
}
.header ul li {
  float: left;
}

.menu-nav :hover{
  color: red;
}
.menu-nav{
font-family: initial;
}
.container-fluid{
  margin: 0px;
  padding: 0px;
}


.carousel-slide > img{
  width: 60rem;
  height: 15rem;
  margin-top: 20px;
}
.carousel-item > img{
  width: 60rem; 
  height: 20rem;

  
}
.country > a {
  text-decoration: none;
  color: rgb(59, 58, 58);
}
footer{
  margin-top: 0;
  padding-top: 0;
}

.card-body > form > input[type=text] {
 width: 270px;
 border: 1px solid #ccc; 
}
.card-body > form >  a >button{
  padding-right: 0;
  border-radius: 5px;
  height: 30px;
  width: 50px;
  background-color: rgb(236, 235, 235);
  color: black;
  border-color: rgb(71, 255, 95);
  border: 20px;
  transform: scale(1);
     transition: 1.3;
}
.card-body > form >  a >button :hover{
  transform: scale(1.1);
color: red;

}
.card-body > form > a > .search{
  padding-right: 0px;
  float: none;
  width: 30px;
}
.ll > a {
  text-decoration: none;
  font-size: 15px;
}
.ll > a> button{
padding-bottom: 35px;
  padding-right: 0;
  border-radius: 5px;
  height: 30px;
  width: 110px;
  background-color: yellow;
  color: black;
  border-color: rgb(71, 255, 95);
  border: 20px;
  transform: scale(1);
     transition: 1.3;
}
.ll > a > .search{
  padding-right: 0px;
  float: none;
  
 
}
.card-body .id {
  text-decoration: none;
}
.dropdown-content > a:hover {background-color: #ddd;}


.dropdown{
position: relative;
display: inline-block;
}
        
.dropdown-content{
display: none;
position: absolute;
background-color: white;
z-index: 1;
         
}
footer .dangnhap  button:hover{
color: black;
}
.menuheader a {
  float: left;
  text-decoration: none;
  margin-top: 20px;
  color: black;
}
.menuheader a:hover{
  color: white;
}
.giohang1 > .card > h5:hover{
color: white;
}
.dropdown:hover .dropdown-content {display: block;}
.menuheader a{
padding-left: 30px;
}
    </style>
   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>

<body>
  
  <div class="container-fluid ">
    <header class=" container-fluid row col-auto  " style="background-color: rgb(255, 208, 0);  " >
      
     <div class="shopping-mall col-xs-3">
      <a href="?trangchu" class=""> 
        didongdanang
        
      </a> 
      
      <h5>technologgy word</h5>
        
    </div>
  
    <div class="cart mt-1  col-xs-6 col-sm-2.5   " >
      <div class="card-body">
        <form action="index.php?contronllers=categoryphone&action=search&category=2&per=6&page=1&search=search" method="POST" style="float: left;">
          
          <input type="text" class="fa fas-search form-control " name="search"  placeholder="Tìm kiếm" style="border-radius: 5px; width: 230px;  " >
          <a href=""><button type="submit"><i class="fa fa-search"></i></button></a>
          
        </form>
      </div>
    </div>
      
     
   
      
    
     <div class="menuheader col-xs-3">
      <a href="index.php?contronllers=categoryphone&action=index" ><i  i class="fas fa-mobile " style="font-size: 20px;"></i>ĐIỆN THOẠI</a>
  
 
  <a href="index.php?contronllers=categoryphone&action=index&table=phanloai&loai=mới nhất&id=1"  ><i class="fas fa-headphones " style="font-size: 20px;"></i> MỚI NHẤT</a>
  <a href="index.php?contronllers=categoryphone&action=index&table=phanloai&loai=cũ giá rẽ&id=2"  ><i class="fas fa-car   " style="font-size: 20px;"></i> CŨ GIÁ RẼ</a>
  <a href="index.php?contronllers=categoryphone&action=index&table=banchay" ><i class=" fas fa-newspaper " style="font-size: 20px;"></i> BÁN CHẠY</a>
</div>


<div class="dangnhap  mt-4 col-2.5 " style="margin-left: 40px;"    >
<?php 
if(isset($_SESSION['username'])){ ?>


  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
   <img width="30px" height="30px" src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" alt="">  <?php   print(strtoupper($_SESSION['username'])); ?>
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="index.php?contronllers=login&action=logout&lg=logout">Đăng xuất</a></li>
    <li><a class="dropdown-item" href="index.php?contronllers=user">Thông tin cá nhân</a></li>
    <li><a class="dropdown-item" href="index.php?contronllers=user&action=form">Đổi mật khẩu</a></li> 
    <li><hr class="dropdown-divider"></li>

    <li><a class="dropdown-item" href="index.php?contronllers=Order&action=cartOfMe">Giỏ hàng</a></li>
  </ul>
</div>

  
<?php }else{
require_once "./MVC/views/lg.php";
}
?>


    </div>
    
    
    </header> 
   </div>
