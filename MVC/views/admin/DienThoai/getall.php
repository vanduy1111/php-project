
<style>
 table, th , td {  
    border: 1px solid black;
    border-collapse: collapse;
    
}  
 table tr > th  {  
 width: 150px;
}
table tr > td  {  
height: 50px;}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
  background-color: #fff;
}
#t01 th {
  color: white;
  background-color: black;
}
</style>
 <article class="container col-3" style=" height: 100%; float: left; margin-top: 2rem; margin-left: 2rem;">
 <div class="menu col-10" style="height: 100%; border: 2px solid lightgrey; background-color: #f1eded;" >
<div style="height: 3rem; background-color: #3f3f46; ">
<h5 style="padding-top: 10px; padding-left: 2rem; color: white;">Loại sản phẩm</h5>
</div>
<ul>
  <?php foreach($getloai as $get): ?>
    <li><a href="?file=admin&contronllers=Dienthoai&table=phanloai&loai=<?=$get['producer'] ?>&id=<?= $get['phanloai_id'] ?>"><p ><?= $get['producer'] ?></p></a></li>

    <hr>
  <?php endforeach; ?>
  <li  ><a href="?file=admin&contronllers=Dienthoai&table=banchay"><p >Bán chạy</p></a></li>
    
</ul>
<div style="height: 3rem; background-color: #3f3f46; ">
<h5 style="padding-top: 10px; padding-left: 2rem; color: white;">Nhà sản xuất</h5>
</div>

<ul>
  <?php foreach($getcate as $get): ?>
    <li><a href="?file=admin&contronllers=Dienthoai&table=category&loai=<?=$get['producer'] ?>&id=<?= $get['category_id'] ?>  ?>"><p ><?= $get['producer'] ?></p></a></li>
    <hr>
  <?php endforeach; ?>
  
    
</ul>


 </div>
 </article>
 <aside class="col-8" style="float: right; height: 100%; margin-top: 10px; margin-right: 3rem; margin-bottom: 5rem;">

<div  style="border: solid  1px red; height:100%">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >&nbsp;&nbsp;Danh sách sản phẩm</h5>
    <a href="?file=admin&contronllers=Dienthoai&action=forminsert" style="text-decoration: none; float: right; margin-right: 20px;"> <button style="background-color: #130f0e; color: white; border-color: #130f0e;;"><h6 style="margin-top: 3px;" >Thêm sản phẩm</h6></button> </a>

<div class="bang">
<table id="t01" style="margin-top: 5rem; margin-left: 2rem;">  
 <tr><th>&nbsp;ID</th><th>&nbsp;Tên Sản phẩm</th><th>&nbsp;Gía sản phẩm</th><th>&nbsp;Ảnh</th><th  style="width: 100px;"> &nbsp;Sữa</th><th style="width: 100px;">&nbsp;Xóa</th> </tr>  
 <?php foreach($product as $product): ?>
 <tr><td><?= $product['id'] ?></td><td>&nbsp;<?= $product['name'] ?></td><td>&nbsp;<?= number_format($product['price'],) ?>
 <label style="color: red;">VNĐ</label>
</td><td><img style="height: 120px; width: 120px;" src="<?= $product['image'] ?>" alt="">
</td><td><a href="?file=admin&contronllers=Dienthoai&action=formupdate&id=<?=$product['id']?>" style="text-decoration: none;">&nbsp;Edit</a></td>
<td><a href="?file=admin&contronllers=Dienthoai&action=delete&id=<?=$product['id']?>" style="text-decoration: none;">&nbsp;Delete</a></td></tr>  
  <?php endforeach ;?>
 </table> </div>
 

<div style="text-align: center; margin-bottom: 5px;">
<div class="" style="height: 60px; width: 800px;margin-top: 20px;  clear: both;">
<?php  for($i = 1 ; $i <= $totalpage;$i++){ ?>
  <?php if($i != $page){ ?>  
  <a href="index.php?file=admin&contronllers=Dienthoai<?php if(isset($_GET['table'])){echo '&table='.$_GET['table']; } ?><?php if(isset($_GET['loai'])){echo '&loai='.$_GET['loai'];} ?><?php if(isset( $_GET['id'])){echo '&id='.$_GET['id'];} ?>&per=6&page=<?= $i ?>"><button><?= $i ?></button> </a>
          <?php }else{ ?>  
             <button style="background-color: black; color: white; margin-top: 10px;" ><?= $i ?></button>
                <?php }}  ?>
            
</div>
</div>
</div>



</aside>

</body>
</html>
