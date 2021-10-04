<?php
session_start();
require('db.php');
echo "Start";

$username="";
$pwd="";
$errors = array();


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
  $pwd = mysqli_real_escape_string($conn, $_REQUEST['pwd']);


  if (count($errors) == 0) {
    $query = "SELECT * FROM login WHERE uname='$username' AND pwd='$pwd'";
    $results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['uname'] = $username;
      $_SESSION['pwd'] = $pwd;
      header("location:home.php");
    }else {
      array_push($errors, "<div class='alert alert-warning'> <b> Wrong username/password combination</b></div>");

    }
  }
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>gym management</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
    .background{
      position: fixed;
      z-index: -1000;
      width: 100%;
      height: 100%;
      overflow: hidden;
      top: 0;
      left: 0;
    }
	.form{
		width:30%;
		margin-left:35%;
		margin-top:7%;
		
	}
	
	hr{
		background-color:white;
	}
  
    .navbar{
      background-color: transparent !important;
    }

    /* This is for the logo of the gym */
    .logo{
	  width:20%;
	
  	/* It is used to make the logo to
	  be displayed along with the ul
	  list horizontally */
	  display:flex;
	  justify-content:center;
	  align-items:center;
   }
	
   .logo img{	
	 width:40%;
	
	 /* The logo image will have a border,
	 that has a width of 2px and the color
	 of the border is white */
	 border:3px solid white;

	 /* Now we will add a border radius of
	 5px to make the logo image circular */
	 border-radius:50px;
   }
  </style>
  
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="logo"><img src="images/gym_bg4.jpg"></div>
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><h4>GYM MANAGEMENT SYSTEM</h4></a>
 

</div>
</nav>
<hr>
 <h1 style="color:white; text-align:center;"> KARTIK FITNESS WORLD</h1>
 <h4 style="color:white; text-align:center;"> To be used by admin only.</h4>
<hr>

<form class="form " action="" method="post">    
	  <input type="text" class="form-control mb-2 mr-sm-2" name="username" placeholder="USERNAME" required> <br/>
	  <input type="password" class="form-control mb-2 mr-sm-2" name="pwd" placeholder="PASSWORD" required> <br/>
	  <button type="submit" class="btn btn-outline-light mb-2" name="login_user">Login</button>
</form>

<div class="background">
  <img src="images/gym_bg.jpg">
</div>


</body>
</html>