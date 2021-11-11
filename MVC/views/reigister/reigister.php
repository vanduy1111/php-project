
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

 
  
<hr>


  <div class="content" style="margin-left:25rem;">
  <div class="card" style="width: 560px;background-color: #e0d9d9e8 ;">
  <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-md-12 order-md-2">
      
        </div>
        <div class="contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>Colorlib</strong></h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <?php
  if(isset($data["mess"])){ ?>
    
    <label style="color: red;"> <?= $mess ?> </label>
  <?php } ?>
   
  

  
  
            <form action="?contronllers=register&action=index" method="post">
              <div class="form-group first">
                <label>Username</label>
                <input type="text" class="form-control" name="username">

              </div>
              <div class="form-group last mb-4">
                <label >Password</label>
                <input type="password" class="form-control" name="password">
                
              </div>
              <div class="form-group last mb-4">
                <label >repass</label>
                <input type="password" class="form-control" name="repass">
                
              </div>
            
              <div class="form-group last mb-4">
                <label >Number Phone</label>
                <input type="phone" class="form-control" name="numberphone">
              </div>
              <div class="form-group last mb-4">
                <label >address</label>
                <input type="text" class="form-control" name="address">
              </div>
        
            
           
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
               
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
            
              </div>

              <input type="submit" name="add" value="Đăng ký" class="btn text-white btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
            
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  </div>

  
  