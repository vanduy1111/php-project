
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
</style>
 <hr>
 <aside class="container" style=" height: 60rem; margin-top: 10px; margin-top: 10px; float: left; margin-left: 7rem; ">


<div  style="border: solid  1px red; height: 55rem; text-align: center;">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >Sản phẩm bán chạy</h5>   
    <div class="trangthai">
  
    </div>

<div class="bang">
<table style="margin-top: 5rem; margin-left: 1rem;margin-right: 1rem;">  
 <tr><th>ID </th><th>Tên sản phẩm</th><th>Gía sản phẩm</th><th >Số lượng</th>

</tr>  
<?php foreach($product as $pro): ?>
   <tr>
   <td><?= $pro['id'] ?></td>
   <td><?= $pro['name'] ?></td>
   <td><?= $pro['price'] ?></td>
   <td><?= $pro['SUM(order_details.product_qty)']?></td></tr>
<?php endforeach; ?>




 </table> </div>
 <div style="margin-top: 20px;margin-left: 25rem;">


 </div>
</div>


</aside>

</body>
</html>
