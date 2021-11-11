
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
 
 <aside class="container" style=" height: 60rem; margin-top: 10px; margin-top: 10px; float: left; margin-left: 7rem; ">


<div  style="border: solid  1px red; height: 55rem; text-align: center;">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >Tài khoản khách hàng</h5>   
    <div class="trangthai">
    <ul>
    <li><a href="index.php?file=admin&contronllers=user">Customer</a></li>
    <li><a href="index.php?file=admin&contronllers=mod">Mod</a></li>
    
    </ul>
    </div>
    <button style="background-color: black; border-color: black;"><a style="color: white; text-decoration: none;" 
    href="index.php?file=admin&contronllers=user&action=forminsert">Thêm tài khoản</a></button>
<div class="bang">
<table id="t01" style="margin-top: 5rem; margin-left: 1rem;margin-right: 1rem;">  
 <tr><th>  ID</th><th> USERNAME</th><th> PASSWORD</th><th >ĐỊA CHỈ</th>
 <th> SỐ ĐIỆN THOẠI</th><th>Sữa</th><th>Xóa</th>
</tr>  

<?php foreach($product as $pro): ?>
    <tr>
<td><?= $pro['id'] ?></td>
<td><?= $pro['username'] ?></td>
<td><?= $pro['password'] ?></td>
<td><?= $pro['numberphone'] ?></td>
<td><?= $pro['address'] ?></td>
<td><a href="index.php?file=admin&contronllers=user&action=formupdate&id=<?= $pro['id']?>">EDIT</a></td>
<td><a href="index.php?file=admin&contronllers=user&action=delete&id=<?= $pro['id']?>">DELETE</a></td>
</tr>
<?php endforeach; ?>


 </table> </div>
 <div style="margin-top: 20px;margin-left: 25rem;">


 </div>
</div>


</aside>

</body>
</html>
