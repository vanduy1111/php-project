<h3 style="text-align: center;margin-top: 10px;color: red;">Lịch sử mua hàng</h3>
<?php foreach($order as $or): ?>

<?php if($or['product_name'] == null) { ?>
<h5>Không có sản phẩm trong giỏ hàng</h5>
<?php } ?>
<div class="container" style="height: 180px; background-color: #c3bebe54; margin-top: 20px;" >


<table style="width: 100%;">  
<tr><th style="width: 20%;"><?= $or['product_name'];?></th><th style="width: 10%;">Giá</th>
<th style="width: 10%;">Số lượng</th><th style="width: 20%;">Họ tên người nhận</th><th style="width: 14%;">Phone</th><th>Địa chỉ</th><td>Trạng thái</td></tr>  
<hr>
<tr><td><img style="width: 90px;margin-top: 10px;" src="<?= $or['product_image']; ?>" alt=""></td>
<td><?= number_format($or['product_price'],);?></td>
<td><?= $or['product_qty'];?></td>
<td><?= $or['customer_name'];?></td>
<td><?= $or['customer_phone'];?></td>
<td><?= $or['customer_address'];?></td>
<td><strong><?= $or['status'];?></strong></td>
</tr>  

</table>  
</div>


<?php endforeach; ?>
<div style="text-align: center;">
<?php  for($i = 1 ; $i <= $totalpage;$i++){ ?>
   <?php if($i != $page){ ?>
   <a href="index.php?contronllers=Order&action=cartOfMe&per=6&page=<?= $i ?>"><button><?= $i ?></button> </a>
            <?php }else{ ?>  
             <button style="background-color: black; color: white; margin-top: 10px;" ><?= $i ?></button>
                 <?php }}   ?>  
</div>   
<hr style="border-color: red;">
<h5 style="text-align: center;font-weight: 700;">Sản phẩm ngẫu nhiên</h5>
<div class="container" style="height: 300px;  margin-top: 20px;">
<div id="productCarouselId" class="carousel slide " data-ride="carousel" style="float: left; margin-top: 10px; width: 100%;">
                <ol class="carousel-indicators">
                  <li data-target="#productCarouselId" data-slide-to="0" class="active"></li>
                  <li data-target="#productCarouselId" data-slide-to="1"></li>
                  <li data-target="#productCarouselId" data-slide-to="2"></li>
               

                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active " >
    <?php foreach($product as $pro): ?>
        <div style="margin-left: 50px;">
     <div style="float: left;">
             <a href="index.php?contronllers=phone1&action=index&id=<?= $pro['id'] ?>">
                  <img style=" width: 200px;" src="<?= $pro['image'] ?>" 
                       alt="First slide">
                             </a>
                <a href="index.php?contronllers=phone1&action=index&id=<?= $pro['id'] ?>"> <h5 style="text-align: center; background-color: #f5f5f5; width: 150px; margin-top: 20px; border-radius: 10px; margin-left: 1rem;"><?= $pro['name'] ?></h5> </a> 
          </div>
         
          
     </div>     
          <?php endforeach; ?>    
    
                  </div>

                  <div class="carousel-item">
             <?php foreach($product2 as $pro): ?>
        <div style="margin-left: 50px;">
     <div style="float: left;">
             <a href="index.php?contronllers=phone1&action=index&id=<?= $pro['id'] ?>">
                  <img style=" width: 200px;" src="<?= $pro['image'] ?>" 
                       alt="second slide">
                             </a>
  <a href="index.php?contronllers=phone1&action=index&id=<?= $pro['id'] ?>"> <h5 style="text-align: center; background-color: #f5f5f5; width: 150px; margin-top: 20px; border-radius: 10px; margin-left: 1rem;"><?= $pro['name'] ?></h5> </a> 
          </div>
         
          
     </div>     
          <?php endforeach; ?>    
         
                     
                  </div>
                </div>
                <a   class="carousel-control-prev "  href="#productCarouselId" role="button" data-slide="prev">
                  <span style="background-color: green;  border-radius: 100%;"  class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  
                </a>
                <a class="carousel-control-next" href="#productCarouselId" role="button" data-slide="next">
                  <span style="background-color: green;  border-radius: 100%;"   class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span  class="sr-only">Next</span>
                </a>
              </div>
</div>
<hr style="border-color: red;">
