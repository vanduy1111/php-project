
<style>
 table, th , td {  
    border: 1px solid black;
    border-collapse: collapse;

    
}  
 table tr > th  {  
 width: 150px;
 
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
}
table tr > td  {  
height: 50px;

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
}</style>

 <aside class="container" style=" height: 60rem; margin-top: 10px; margin-top: 10px; float: left; margin-left: 7rem; ">


<div  style="border: solid  1px red; height: 55rem; text-align: center;">
    <h5 class="" style="height: 40px; background-color: #231e1e91; color: white; " >&nbsp;&nbsp;Đơn đặt hàng</h5>   
    <div class="trangthai">
    <ul>
    <li><a href="index.php?file=admin&contronllers=order&action=index">Tất cả</a></li>
    <li><a href="index.php?file=admin&contronllers=order&action=index&loai=1">Đơn hàng mới</a></li>
    <li><a href="index.php?file=admin&contronllers=order&action=index&loai=2">Đơn hàng đã giao</a></li>
    <li><a href="index.php?file=admin&contronllers=order&action=index&loai=3">Đơn đang đã giao</a></li>
    <li><a href="index.php?file=admin&contronllers=order&action=index&loai=4">Hết hàng</a></li>
    </ul>
    </div>
<div class="bang">
<table id="t01" style="margin-top: 5rem; margin-left: 1rem;margin-right: 1rem;">  
 <tr><th>&nbsp;ORDER ID</th><th>&nbsp;Tên Sản phẩm</th><th>&nbsp;Gía sản phẩm</th><th style="width: 10%;">&nbsp;Địa chỉ</th>
 <th>&nbsp;Số điện thoại</th>
 <th>&nbsp;Số lượng</th><th  style="width: 200px;"> &nbsp;CODE</th><th style="width: 100px;">&nbsp;Trạng thái</th><th>Hành động</th> </tr>  
 <?php foreach($order as $or): ?>
 <tr>
 <td style="width: 10%;"><?= $or['id'] ?></td>
 <td><?= $or['product_name'] ?></td>
    <td><?= $or['product_price'] ?></td>
    <td><?= $or['customer_address'] ?></td>
    <td><?= $or['customer_phone'] ?></td>
    <td style="width: 10%;"><?= $or['product_qty'] ?></td>
    <td><strong><?= $or['code'] ?></strong></td>
    <form action="index.php?file=admin&contronllers=order&action=update" method="post">
    <td><select name="status"> 
    <option value="hết hàng" <?php if($or['status'] == "hết hàng") echo "selected"?> >hết hàng</option>
    <option value="Gửi yêu cầu" <?php if($or['status'] == "Gửi yêu cầu") echo "selected"?> >Gửi yêu cầu</option>
    <option value="đang giao hàng" <?php if($or['status'] == "đang giao hàng") echo "selected"?>  >đang giao hàng</option>
    <option value="đã giao hàng" <?php if($or['status'] == "đã giao hàng") echo "selected"?>  >đã giao hàng</option>
    </select></td>

    <td><button style="font-size: 13px;" name="id" value="<?= $or['id'] ?>">Cập nhật</button>
 </form>
 </tr>
 
 <?php endforeach; ?>
 </table> </div>
 <div style="margin-top: 20px;margin-left: 25rem;">


 </div>
</div>


</aside>

</body>
</html>
