<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    .menu ul li  a p{
        padding-top: 5px; padding-left: 2rem; color: black;height: 1.5rem ; text-decoration: none;
    }
    .menu a{
        text-decoration: none;
    }
    .menu a :hover{
        color: red;
    }
    .hr hr{
        color: white;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
 <header class="container-fluid col-12" style="height: 60px; background-color: lightblue ; margin-left: 0px;">

 </header>
 <div class="hr">
 <hr >
 <hr>
 <hr>
 <hr>
 <hr>
 <hr>
 </div>

 <div class="card-body col-7" style="  height: 53rem; margin-top: 10px;margin-bottom: 5rem; border:   1px solid red; margin-left: 25%; margin-top: 10px; ">
 <h5 style="text-align: center;">THÊM SẢN PHẨM</h5>
<form  action="?file=admin&contronllers=Dienthoai&action=insert" method="post" style="text-align: center;">
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">TÊN </label>
                <input type="text" name="name">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">GIẢM GIÁ</label>
                <input type="number" name="sale">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">ẢNH 1</label>
                <input type="text" name="image">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">ẢNH 2</label>
                <input type="text" name="image2">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">ẢNH 3</label>
                <input type="text" name="image3">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">Giá</label>
                <input type="text" name="price">  <br> <br>

              
    <label style="margin-top: 10px;">Hãng sản xuất <select  name="category_id" placeholder="Hãng sản xuất">
    <?php foreach($getcate as $getcate): ?>
<option value="<?=$getcate['category_id'] ?>" ><?=$getcate['producer']?></option>
<?php endforeach; ?>
</select></label> 
<label  style="margin-top: 10px; margin-left: 20px;">Phân loaị <select  name="phanloai_id" placeholder="Hãng sản xuất">
<?php foreach($getloai as $getloai): ?>
    <option value="<?=$getloai['phanloai_id'] ?>" ><?=$getloai['producer']?></option>

<?php endforeach; ?>
</select></label> <br> <br>
                

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">CPU</label>
                <input type="text" name="chip">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">TRẢ GÓP</label>
                <input type="text" name="installment">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">RAM</label>
                <input type="text" name="ram">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">BỘ NHỚ</label>
                <input type="text" name="Capacity">  <br> <br>

                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">QUÀ</label>
                <input type="text" name="gift">  <br> <br>
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">VIDEO</label>
                <input type="text" name="video">  <br> <br>
                <input style="margin-top: 20px; width: 100px;background-color: greenyellow; border-color:greenyellow ;"  type="submit" name="add" >

</form>
    </div>


</body>
</html>




