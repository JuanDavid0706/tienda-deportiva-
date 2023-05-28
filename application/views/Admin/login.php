<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url().'acceso/estilos/login.css';	 ?>">
<link rel="stylesheet" href="<?php echo base_url().'acceso/js/login.css';	 ?>">
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class"links">
        <li class="signin-active"><a class="btn">Sign in</a></li>
        
        <div class="nav">
        
            <li class="singnin-active" style="background-color: white;"><a class="btn" href="<?php echo base_url().'' ;?>">Tienda
            </a>
            </li>
          

        </div>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
				        <form class="form-signin" action="<?php echo base_url().'guardar-admin';?>" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="psw" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
            <button class="btn-outline-success" type="submit">Sign in</button> 
          </div>
          
				        </form>
        
				       
      
      
      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
      
     
    
  
  </a>
</div>