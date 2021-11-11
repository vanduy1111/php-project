<style>
*{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
header{
    background-color: #cccccc;
    min-height: 70px;
    padding: 15px;
}
main{
    background-color: #dddddd;
    min-height: 300px;
    padding: 7.5px 15px;
}
footer{
    background-color: #cccccc;
    min-height: 70px;
    padding: 15px;
}
.container{
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}
.login-form{
    width: 100%;
    max-width: 550px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 15px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
}
h1{
    color: #009999;
    font-size: 20px;
    margin-bottom: 30px;
}
.input{
    margin-bottom: 10px;
}
.input label{

    width: 70%;

    
    text-align: center;
    outline: none;
}
.input label a{
    text-decoration: none;
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
table, th, td {  
    border: 1px solid black;  
    border-collapse: collapse;  
}  
th, td {  
    padding: 10px;  
}  
tr , th {
    width: 20%;
}
.btn-box button{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #009999;
    color: #ffffff;
    border: none;
    outline: none;
    clear: both;
}</style>
<main>
            <div class="container">
            <div class="login-form">
                <form action="" method="post">
                    <h1>Thông tin tài khoản</h1>
                  
              
                    <?php foreach($user as $user): ?>
                     
                    <table style="width:100%">  
  <tr>  
    <th>Username</th>  
<td><?= $user['username'] ?></td>

  </tr>  
  <tr>  
  <th>Password</th>  
    <td><?= md5($user['password'] )?></td>  
    <td style="border-color: white;"><a href="index.php?contronllers=user&action=form">Thay đổi</a></td>
  </tr> 
  <tr>  
  <th>numberphone</th>  
    <td><?= $user['numberphone'] ?></td>  
    
  </tr>
  <tr>  
  <th>Address</th>  
    <td><?= $user['address'] ?></td>  

  </tr> 
</table>  
                    <?php endforeach; ?>
                   
                </form>
            </div>
            </div>
        </main>
