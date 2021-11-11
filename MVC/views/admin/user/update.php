
<form action="index.php?file=admin&contronllers=user&action=update" method="post">
<div class="to" style="text-align: center;">
            <div class="form">
            
                <h2>Đăng Nhập Admin</h2>
                <i class="fab fa-app-store-ios"></i>
               
                <input type="hidden" name="id" value="<?=$_GET['id']?>">
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">Tài khoản</label>
                <input type="text" name="username">  <br> <br>
          
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">mật khẩu</label>
                <input type="password" name="password">  <br><br>
                <input type="text" name="sdt">    
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">phone</label>
                <input type="numberphone" name="numberphone">  <br><br>
                <input type="text" name="sdt"> 
                <label style="margin-left: -180px; font-weight: 800;width: 80px;">address</label>
                <input type="text" name="address">  <br>
                <input style="margin-top: 20px; width: 100px;background-color: greenyellow; border-color:greenyellow ;"  type="submit" name="submit" >
            </div>                
        </div>

</form>
</body>
</html>