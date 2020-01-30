<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "login.css">  
   </head>
    <body>
        
	<?php
          require 'include\common.php';
        ?> 
        <?php
         include 'include\header.php';
        ?>
        <?php
        
         if(isset($_GET['error']))
         {
            echo'<script>alert("Incorrect email or password!");</script>';                                
         }
                                
        ?>    
	<div class = "container">
	  <div class = "row">
              <div class = "col-lg-6">
                  <img src = "images/mob69.jpg" class="img-responsive img-rounded" style="height:500px;">
              </div>
		<div class = "col-lg-4">
		 <div class = "panel panel-default myPanel">
		    <div class = "panel-heading">
			 <h3 class = "text-warning">Login to make a purchase</h3>
			</div>
			<div class = "panel-body" style = "max-height:50;">
			 <form action = "login_submit.php" method = "post">
			    <div class = "form-group">
				  <label for="email">Email</label>
				  <input type = "email" name = "email" class = "form-control" placeholder = "E-Mail"/>
				</div>
				<div class = "form-group">
				  <label for="password">Password</label>
				  <input type = "password" name = "password" class = "form-control" placeholder = "Password"/>
				</div>
				<div class = "form-group">
				  <center><input type = "submit" class = "btn btn-primary"/></center>
				</div>
			 </form>
			</div>
			<div class = "panel-footer">
			  <h4>Don't have an account? <a href = "register.php">Register</a></h4>
			</div>
		</div>
		</div>
	  </div>	
	</div>	
	<?php
          //including footer section
         include 'include\footer.php';
         ?>    
	</body> 
</html>	