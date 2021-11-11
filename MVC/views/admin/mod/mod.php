
<style>
 table, th , td {  
    border: 1px solid black;
    border-collapse: collapse;

    
}  

.trangthai ul li {
    float: left;
    list-style: none;
    margin-left: 40px;
    font-weight: 700;
}
.trangthai ul li  a{
   text-decoration: none;
   color: orangered;
   font-size: 25px;
}
table tr > td  {  
height: 50px;

}
table tr th{
width: 10%;

}
table tr td a{
text-decoration: none;

}
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
<aside class="container" style=" height: 100%;  margin-top: 10px; float: left; margin-left: 7rem; ">


<div  style="border: solid  1px red; height: 55rem; text-align: center;height: 100%; ">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >Tài khoản khách hàng</h5>   
    <div class="trangthai">
    <ul>
    <li><a href="index.php?file=admin&contronllers=user">Customer</a></li>
    <li><a href="">Mod</a></li>
    
    </ul>
    </div>
    
    <?php if($username[0]['position'] == 'ADMIN'){ echo '<button style="background-color: black; border-color: black;"><a style="color: white; text-decoration: none;" 
    href="index.php?file=admin&contronllers=mod&action=forminsert">Thêm tài khoản</a></button>';} ?>
<div class="bang">
<table id="t01" style="margin-top: 5rem; width: 94%;margin-left: 2rem; margin-bottom: 4rem;">  

 <tr><th>  ID</th><th> USERNAME</th><th> PASSWORD</th><th>Chức vụ</th><?php if($username[0]['position'] == 'ADMIN'){ echo '<th>Sữa</th><th>Xóa</th>';} ?>
</tr>  

<?php foreach($product as $pro): ?>
    <tr>
<td><?= $pro['id'] ?></td>
<td><?= $pro['username'] ?></td>
<?php if($username[0]['position'] == 'ADMIN'){ ?>
<td><?= $pro['password'] ?></td>
<?php }else{ ?>
  <td><?= md5($pro['password']) ?></td>
<?php } ?>
<td><?= $pro['position'] ?></td>
<?php if($username[0]['position'] == 'ADMIN'){ ?>
<td><a href="index.php?file=admin&contronllers=mod&action=formupdate&id=<?= $pro['id']?>">EDIT</a></td>
<td><a href="index.php?file=admin&contronllers=mod&action=delete&id=<?= $pro['id']?>">DELETE</a></td>
<?php } ?>
</tr>
<?php endforeach; ?>


 </table> </div>
 
</div>


</aside>
 

</body>
</html>
