<?php
include("auth.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>gym management system</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css">
  
</head>
<body style="background:url(images/gym_bg2.jpg);">



	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
    <div class="logo"><img src="images/gym_bg4.jpg"></div>
    <style>
     /* This is for the logo of the gym */
     .logo{
	   width:20%;
     }
	
     .logo img{	
	   width:40%;
	
	   /* The logo image will have a border,
	   that has a width of 2px and the color
	   of the border is white */
	   border:3px solid white;

	   /* Now we will add a border radius of
	   5px to make the logo image circular */
	   border-radius:100px;
     }
    </style>
  
  <h1 style="color:white; text-align:center;"> KARTIK'S FITNESS WORLD</h1>
    <n>
  <a class="navbar-brand" href="home.php"><h6 class="text-center">GYM MANAGEMENT SYSTEM</h6></a>
  <n>
  <h6 style="color:white; text-align:;"> MR.KARTIK NAIDU SIR</h6>
  <n>
  <a href="logout.php" class=" nav nav-link">log out</a>
</div>
</nav>



<div class="row mt-3">
  <div class="col-2">
    <div id="accordion">
    <div class="list-group">
       <div class="list-group-item bg-dark">
         <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
         <i class="fas fa-users"></i>MEMBERS</a>
       </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_member" class="text-light">ADD MEMBER</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_member" class="text-light">VIEW MEMBERS</a></div>
       </div>

       <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
        <i class="fas fa-user-alt"></i>TRAINERS</a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_trainer" class="text-light">ADD TRAINER</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_trainer" class="text-light">VIEW TRAINERS</a></div>
      </div>

      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
        <i class="fas fa-book"></i>ABOUT</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=about" class="text-light">ABOUT US</a></div>
      </div>
    </div>
  </div>
</div>

  <div class="col-10">
   <?php

@$info=$_GET['info'];
if ($info!=="") 
       {
             if ($info=="add_member") {
               include ('add_member.php');
             }elseif ($info=="manage_member") {
               include ('manage_member.php');
             }elseif ($info=="member_search") {
              include ('member_search.php');
            }elseif ($info=="update_member") {
              include ('update_member.php');
            }elseif ($info=="delete_member") {
              include ('delete_member.php');
            }

             elseif ($info=="add_trainer") {
              include ('add_trainer.php');
             }elseif ($info=="manage_trainer") {
               include ('manage_trainer.php');
             }elseif ($info=="trainer_search") {
              include ('trainer_search.php');
            }elseif ($info=="update_trainer") {
              include ('update_trainer.php');
            }elseif ($info=="delete_trainer") {
              include ('delete_trainer.php');
            }

            elseif($info=="about") {
              include ('about.php');
            }
             
            elseif ($info=="change_password") {
               include ('change_password.php');
             }
       }

?>
  </div>
</div>



</body>
</html>