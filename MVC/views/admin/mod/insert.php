
<form action="index.php?file=admin&contronllers=mod&action=insert" method="post">
<div class="to" style="text-align: center; ">
            <div class="form" >
            <?php if(isset($mess)){ ?>
               <h5 style="color: red;"><?= $mess; ?></h5>  
       <?php      } ?>
                <h2>Thêm tài khoản Admin Admin</h2>
                <i class="fab fa-app-store-ios"></i>
               
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">Tài khoản</label>
                <input type="text" name="username">  <br> <br>
          
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">mật khẩu</label>
                <input type="password" name="password">  <br><br>
               
                <label  style="margin-left: -180px; font-weight: 800;width: 80px;margin-left: 1px; border: solid  1px black">position</label>
             <select name="position" style="width: 180px; height: 30px;" >
             <option  value="ADMIN">ADMIN</option>
             <option  value="MOD">MOD</option>
             </select>
             <br><br>
                <input style="margin-top: 20px; width: 60px;background-color: greenyellow; border-color:greenyellow ;"  type="submit" name="submit" >
            </div>                
        </div>

</form>
</body>
</html>