<style>
    form  input {
   
        width: 200px;
        margin-right: 40px;
    }
   
</style>
<body>
<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
}else{
    echo null;
}
?>

<div class="card-body col-7" style="  height: 53rem; margin-top: 10px;margin-bottom: 5rem; border:   1px solid red; margin-left: 25%; margin-top: 10px; ">
 <h5 style="text-align: center;">THÊM SẢN PHẨM</h5>
<form  action="?file=admin&contronllers=Dienthoai&action=insert" method="post" style="text-align: center;">
<input type="hidden" name="id" value="<?=$id?>">
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
