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
  width: 90px;
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

.dropdown:hover .dropdown-content {display: block;}
    </style>
 <div class="container mt-3">
        
       
        
        <nav class="row "   > 
       <div class="col-auto">
       <?php foreach($product as $pro): ?>
        <div class="card float-left      " style="background-color: white;">

<div class="card-mn">
  <a href="index.php?contronllers=categoryphone&action=index&table=category&cate=<?= $pro['producer'] ?>&id=<?= $pro['category_id']?>">
    <img   src="<?= $pro['image'] ?>"  class="img-fluid" style="width: 122px ; height: 40px;" ></a>
</div>
</div>
    <?php endforeach; ?>

          
    

<div class="card float-left     ">

<div class="card-mn">
<?php if(isset($_SESSION['userAdmin'])){ ?>
  <a href="?file=admin&contronllers=dienthoai"><img   src="https://logos.textgiraffe.com/logos/logo-name/Admin-designstyle-jungle-m.png"  class="img-fluid" style="width: 122px ; height: 40px;" ></a>
  <?php }else{ ?>
    <a href="index.php?file=admin&contronllers=login&action=viewlogin"><img   src="https://logos.textgiraffe.com/logos/logo-name/Admin-designstyle-jungle-m.png"  class="img-fluid" style="width: 122px ; height: 40px;" ></a>
    <?php } ?>
</div>
</div>  

       
       </div>

          
              </nav>
     
        <section class="row">
            <article class="col-12  " >
            	<div id="productCarouselId" class="carousel slide col-8" data-ride="carousel" style="float: left; margin-top: 10px;">
                <ol class="carousel-indicators">
                  <li data-target="#productCarouselId" data-slide-to="0" class="active"></li>
                  <li data-target="#productCarouselId" data-slide-to="1"></li>
                  <li data-target="#productCarouselId" data-slide-to="2"></li>
               

                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active " >
                  <img src="https://images.fpt.shop/unsafe/fit-in/800x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/4/8/637535198139622720_F-H1_800x300.png" 
                    alt="First slide">
                    
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.tgdd.vn/2020/07/banner/800-300-800x300-23.png"
                     alt="Second slide">
                     
                  </div>
                  <div class="carousel-item">
                    <img src="https://cdn.tgdd.vn/2020/07/banner/800-300-800x300-20.png" 
                    alt="Third slide">
                    
                  </div>
                 
                </div>
                <a class="carousel-control-prev "  href="#productCarouselId" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  
                </a>
                <a class="carousel-control-next" href="#productCarouselId" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
         <div class="col-4" style="  height: 20rem; float: right; margin-top: 10px;">

<div>
    <img style="width: 350px; height: 6rem;" src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/3/31/637528276050533862_94764899-9A87-4150-AE6C-7D9B8BCEFBF6.png" alt="">    
     <img style="width: 350px; margin-top: 10px; height: 6rem;" src="https://images.fpt.shop/unsafe/fit-in/385x100/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/3/31/637528276050533862_94764899-9A87-4150-AE6C-7D9B8BCEFBF6.png" alt="">
</div>
<div style="height: 5rem;">
<hr>
<label>Tin tức nổi bật</label> <a style="float: right;" href="">Xem tất cả</a> <br>
<a href=""><img  style="border-radius: 5px;" src="https://images.fpt.shop/unsafe/fit-in/70x40/filters:quality(90):fill(white)/https://fptshop.com.vn/uploads/images/tin-tuc/128769/Originals/stories_ava.png" alt=""></a>
<label style="font-weight: 600; margin-left: 10px;">Iphone 12 series giảm đến 3 triệu</label>
<div style="margin-top: 10px;">
<a href=""><img  style="border-radius: 5px;" src="https://images.fpt.shop/unsafe/fit-in/70x40/filters:quality(90):fill(white)/https://fptshop.com.vn/uploads/images/tin-tuc/125339/Originals/70x40(3).png" alt=""></a>
<label style="font-weight: 600; margin-left: 10px;">Oppo Reno5 5G 8GB-128GB</label>
</div>
</div>
         </div>
          
              <div class="product">
              <div class="card-text ">
                <h4 style="padding: 40px; text-align: center;">Điện thoại bán chạy </h4>
              </div>
              <div class="ll">
                <label for="">Lọc sản phẩm :</label>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=4000000&max=2000000"> Từ 2 - 4 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=8000000&max=3000000"> Từ 4 - 8 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=16000000&max=8000000"> Từ 8 - 16 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=32000000&max=16000000"  > Từ 16 - 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=88888888889999&max=32000000"  > Trên 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="/index.php?contronllers=categoryphone&action=index"  > Tất cả</a>
              <a href=""> <input type="checkbox"  value="Mới"> Bán chạy
                  <span style="background-color: orangered; font-size: 10px; " class="badge badge-secondary">MỚI</span >
              </a>
                 <a href=""><button type="submit"><i class="fa fa-search"> Tìm kiếm</i></button></a>
           </div>
              
              <div class="card-text">

<?php foreach($banchay as $banchay): ?>
<div class="product1">

                    
          
                   <div class="card float-left col-3" style=" height: 23rem;">
<div class="card-body">
<a href="index.php?contronllers=phone&action=index&id=<?= $banchay['id'] ?>" class="" ><img src="<?= $banchay['image'] ?>" class="img-fluid"></a>
<span style="background-color: orangered;" class="badge badge-secondary">Giảm <?=number_format($banchay['sale'],)?>₫</span> <br>
<a href=""class="id" ><?=$banchay['name'] ?></a><br>

<a href="dt3.html" class="name badge badge-warning"><?= number_format(($banchay['price']),); ?>₫</a>
<h6><?= $banchay['gift'] ?></h6>
</div>
</div>
             <?php endforeach;?>    




</div>
              </div>

              <div class="product">
              <div class="card-text ">
                <h4 style="padding: 10px; text-align: center; "><a style="text-decoration: none; color: black;" href="">Điện thoại mới nhất</a></h4>
              </div>
              <div class="ll">
                <label for="">Lọc sản phẩm :</label>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=4000000&max=2000000"> Từ 2 - 4 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=8000000&max=3000000"> Từ 4 - 8 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=16000000&max=8000000"> Từ 8 - 16 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=32000000&max=16000000"  > Từ 16 - 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=88888888889999&max=32000000"  > Trên 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="/index.php?contronllers=categoryphone&action=index"  > Tất cả</a>
              <a href=""> <input type="checkbox"  value="Mới"> Bán chạy
                  <span style="background-color: orangered; font-size: 10px; " class="badge badge-secondary">MỚI</span >
              </a>
                 <a href=""><button type="submit"><i class="fa fa-search"> Tìm kiếm</i></button></a>
           </div>
              
              <div class="card-text">

<?php foreach($moinhat as $moinhat): ?>
<div class="product1">

             

                   <div class="card float-left col-3" style=" height: 23rem;">

<div class="card-body">
<a href="index.php?contronllers=phone&action=index&id=<?= $moinhat['id'] ?>" class="" ><img src="<?= $moinhat['image'] ?>" class="img-fluid"></a>
<span style="background-color: orangered;" class="badge badge-secondary">Giảm <?=number_format($moinhat['sale'],)?>₫</span> <br>
<a href="index.php?contronllers=phone&action=index&id=<?= $moinhat['id'] ?>"class="id" ><?=$moinhat['name'] ?></a><br>

<a href="index.php?contronllers=phone&action=index&id=<?= $moinhat['id'] ?>" class="name badge badge-warning"><?= number_format(($moinhat['price']),); ?>₫</a>
<h6><?= $moinhat['gift'] ?></h6>
</div>
</div>
                   


</div>
<?php endforeach; ?>
</div>
              </div>
              <div class="product">
              <div class="card-text ">
                <h4 style=" padding: 10px; text-align: center;">Cũ giá rẽ</h4>
              </div>
          <div class="ll">
                <label for="">Lọc sản phẩm :</label>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=4000000&max=2000000"> Từ 2 - 4 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=8000000&max=3000000"> Từ 4 - 8 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=16000000&max=8000000"> Từ 8 - 16 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=32000000&max=16000000"  > Từ 16 - 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="index.php?contronllers=categoryphone&action=index&min=88888888889999&max=32000000"  > Trên 32 triệu</a>
                <input type="checkbox"  value="Mới"><a href="/index.php?contronllers=categoryphone&action=index"  > Tất cả</a>
              <a href=""> <input type="checkbox"  value="Mới"> Bán chạy
                  <span style="background-color: orangered; font-size: 10px; " class="badge badge-secondary">MỚI</span >
              </a>
                 <a href=""><button type="submit"><i class="fa fa-search"> Tìm kiếm</i></button></a>
           </div>


              <?php foreach($cugiare as $cugiare): ?>
              <div class="card-text">


             
           
                   <div class="card float-left col-3" style=" height: 23rem;">

<div class="card-body">
<a href="index.php?contronllers=phone&action=index&id=<?= $cugiare['id'] ?>" class="" ><img src="<?= $cugiare['image'] ?>" class="img-fluid"></a>
<span style="background-color: orangered;" class="badge badge-secondary">Giảm <?=number_format($cugiare['sale'],)?>₫</span> <br>
<a href="index.php?contronllers=phone&action=index&id=<?= $cugiare['id'] ?>"class="id" ><?=$cugiare['name'] ?></a><br>

<a href="index.php?contronllers=phone&action=index&id=<?= $cugiare['id'] ?>" class="name badge badge-warning"><?= number_format(($cugiare['price']),); ?>₫</a>
<h6><?= $cugiare['gift'] ?></h6>
</div>
</div>
                 

</div>
<?php endforeach; ?>
              </div>



</div>




            
            </article>
            <aside    >
             
              
              
            </aside>
        </section>
     
    </div>