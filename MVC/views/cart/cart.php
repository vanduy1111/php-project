<script src="https://code.jquery.com/jquery-latest.js"></script>

<style type="text/css"> 
table, th, td {  
    border: 1px solid black;
    border-collapse: collapse;
}
table, tr, th {
    text-align: center;
}
.nut  button {
    margin-left: 10px;
    float: right;
    margin-top: 10px;
    margin-bottom: 10px;
    background-color: #00ff43;
    border-radius: 5px;
    border-color: #00ff43;
}
.nut button a{
    text-decoration: none;
    color: black;
}

</style>
<body>

    <div class="container mt-3">
<h5 style="text-align: center;">Danh Sách Sản Phẩm Trong Giỏ Hàng</h5>
<form action="index.php?contronllers=cart&action=update" method="POST">

<table style="width:  100%;">  
 <tr>
 <th>Hình ảnh</th>
 <th>Tên sản phẩm</th>
 <th>Giá sản phẩm</th>
 <th>Số lượng</th>
 <th> Giá tiền</th>
 <th>Ngày đặt</th>
 <th>Hành động</th>
 </tr>  
 <tr>

 <?php



 foreach($product as $pro): ?>


 <td><img style="width: 100px; height: 120px;" src="<?= $pro[0]['image'] ?>" alt=""></td>
 <td> <?= $pro[0]['name'] ; ?></td>
 <td><?=   number_format($pro[0]['price'],) ?> </td>

<td style="width: 4%;"> <input style="width: 100%;border-color: white;text-align: center;"
 type="number" name="qty[<?= $pro[0]['id'] ?> ]" value="<?= $pro['qty'] ?>"></td>


 <td><?=  number_format(($pro[0]['price']*$pro['qty']),) ?></td>
 <td><?=(date("F d, Y "));  ?> </td>
 <td><a href="index.php?contronllers=cart&action=delete&id=<?= $pro[0]['id'] ?>">Xóa</a></td>
 </tr>  
 <?php endforeach;  ?>
 </table> 
 <?php  if(empty($product)){
echo ' <h5 style="color: red;">Không có sản phẩm trong giỏ hàng của bạn</h5>';
 } ?>
<div class="nut">
<button ><a href="index.php?contronllers=home">Tiếp tục mua hàng</a></button>
 <button><a href="index.php?contronllers=cart&action=destroy">Xóa tất cả</a></button>


<button>Cập nhật</button>

</div>
</form>
<br>
<div class="dathang">

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Gửi đơn hàng
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Thông tin khách hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-order">
<form action="index.php?contronllers=Order&action=store" method="POST">

<?php if(isset($user)){?>
  <input type="hidden" name="user_id" value="<?= $user[0]['id']?>">
<?php } ?>
  <input type="hidden" name="status" value="Gửi yêu cầu">
<label for="">Tên khách hàng</label>
<input type="text" name="customer_name" >
<br>
<label for="">Số điện thoại</label>
<input type="text" name="customer_phone" value=" <?= $user[0]['numberphone'] ?> ">
<br>
<label for="">Địa chỉ</label>
<input type="text" name="customer_address"  value=" <?= $user[0]['address'] ?> " >
<br>
        
  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Đặt hàng</button>
        </div>


</form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
    </div>
  <!-- Button trigger modal -->

</body>

</html>
<style>
 .form-order label{
     width: 200px;
     float: left;
     margin-top: 10px;
     
 }
 .form-order input{
     padding: 5px;
    width: 200px;
    margin-top: 10px;
    
 }
 .form-order {
     margin-top: 20px;
 
 }
</style>

