<?php

if(isset($_POST['login'])){
  $username = $_POST['Username'];
  $password = $_POST['Password'];

  $xml = simplexml_load_file('login.xml');

  $username_xml = $xml->user[0]->username;
  $password_xml = $xml->user[0]->password;



  if (($password == $password_xml) AND ($username == $username_xml)) {
    // session_start();
    // $_SESSION["Username"] = $username;
    header("location:admin.html");

  }
  elseif (($password != $password_xml) && ($username != $username_xml))
          {
            // echo $username_xml;
            // echo $password_xml;

            header("location:adminlogin.php?add=no");
          }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="adminlogincss/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<!-- Load the Font Awesome kit for the Icon -->
	<script src="https://kit.fontawesome.com/5aa8e0bc47.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="adminlogin.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="">Welcome</h2>
  
           		<div class="input-div one">
           		   <div class="i">
                  <!-- Load icon -->
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="Username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="Password" class="input">
            	   </div>
                 
            	</div>
               
            	<input type="submit" name="login" class="btn" value="Login">
              
            </form>
            <?php
                 if(isset($_GET["add"])){
                  
                    if($_GET['add']=="yes"){

                   
                       echo "<div id='display-success'>  </div>";//display message if account has been successfully created and verified.
                   
                     
                    }
                    elseif($_GET['add']=="no"){
                  
                       echo"<div id ='display-error'>Incorrect username or Password</div>";//Error message
                    
                       }

                  }
                  ?>
        </div>
    </div>
    
</body>
</html>
