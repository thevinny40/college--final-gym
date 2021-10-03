<?php

require('db.php');
$conn;
$errors = array();
if (isset($_POST['trainer'])) {

  $name = mysqli_real_escape_string($conn, $_REQUEST['tr_name']);
  $gen = mysqli_real_escape_string($conn, $_REQUEST['gen']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
  $mobile_no = mysqli_real_escape_string($conn, $_REQUEST['mobile_no']);
  $pstatus = mysqli_real_escape_string($conn, $_REQUEST['pstatus']);
  $user_check_query = "SELECT * FROM trainer WHERE tr_name='$name' LIMIT 1";


  if (count($errors) == 0) {
    

    $query = "INSERT INTO trainer (tr_name,gen,time,mobile_no,pstatus) 
          VALUES('$name','$gen','$time','$mobile_no','$pstatus')";
    $result = mysqli_query($conn, $user_check_query);
    $sql = mysqli_query($conn, $query);
    if ($sql) {
      $msg = "<div class='alert alert-success'><b>Trainer added successfully</b></div>";
    }
    else {
      $msg = "<div class='alert alert-warning'><b>Trainer not added</b></div>";
    }
  }
}
?>



<div class="container">
	<form class="mt-3 form-group" method="POST" action="">
		<h3>ADD TRAINER</h3>

		 <?php include('errors.php');
      echo @$msg;
     ?>

		<label class="mt-3">TRAINER NAME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="text" required name="tr_name" class="form-control">
  
    <label class="mt-3">GENDER <abbr title="This field is mandatory" aria-label="required"></abbr></label>
    <select style="color:black" required name="gen" class="form control mt-3">
      <option style="color:black" value="MALE" >MALE</option>
      <option style="color:black" value="FEMALE" >FEMALE</option>
      <option style="color:black" value="OTHER" >OTHER</option>
    </select>

     <br>

		<label class="mt-3">TIME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="time" required name="time" class="form-control">

		<label class="mt-3">MOBILE NO <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="tel" pattern="[0-9]{10}" required name="mobile_no" class="form-control">
    <small>Format: 1234567890</small>

     <br>
    
    <label class="mt-3">PAYMENT STATUS <abbr title="This field is mandatory" aria-label="required"></abbr></label>
    <select style="color:black" required name="pstatus" class="form control mt-3">
     <option style="color:black" value="DONE" >DONE</option>
     <option style="color:black" value="PENDING" >PENDING</option>
    </select>
    
    <br>
    
		<button class="btn btn-dark mt-3" type="submit" name="trainer">ADD</button>
	</form>
</div>