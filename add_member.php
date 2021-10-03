<?php

include 'db.php';
$conn;
$errors = array();
if (isset($_POST['member'])) {

  $name = mysqli_real_escape_string($conn, $_REQUEST['m_name']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
  $doj = mysqli_real_escape_string($conn, $_REQUEST['doj']);
  $gen = mysqli_real_escape_string($conn, $_REQUEST['gen']);
  $package = mysqli_real_escape_string($conn, $_REQUEST['package']);
  $fstatus = mysqli_real_escape_string($conn, $_REQUEST['fstatus']);
  $mobile_no = mysqli_real_escape_string($conn, $_REQUEST['mobile_no']);
  $trainer_name = mysqli_real_escape_string($conn, $_REQUEST['tr_name']);
  $user_check_query = "SELECT * FROM member WHERE m_name='$name' LIMIT 1";
  


  if (count($errors) == 0) {
  

    $query = "INSERT INTO member (m_name,age,doj,gen,package,fstatus,mobile_no,tr_name) 
          VALUES('$name','$age','$doj','$gen','$package','$fstatus','$mobile_no','$trainer_name')";
    $result = mysqli_query($conn, $user_check_query);
    $sql=mysqli_query($conn, $query);
    if ($sql) {
      
    $msg="<div class='alert alert-success'><b>Member added successfully</b></div>";
    }
    else{
      $msg="<div class='alert alert-warning'><b>Member not added</b></div>"; 
    }
  }
}
?>




<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<div><h3>ADD MEMBER</h3></div>
		 <?php include('errors.php'); 
       echo @$msg;
       echo $sql;
    ?>

		<label class="mt-3">MEMBER NAME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="text" required name="m_name" class="form-control">

		<label class="mt-3">AGE <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="number" min="18" max="50" required name="age" class="form-control">
    <small>Format: Age must be in range of 18-50</small>

      <br>

		<label class="mt-3">DATE OF JOINING <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="date" required name="doj" class="form-control">

    <label class="mt-3">GENDER <abbr title="This field is mandatory" aria-label="required"></abbr></label>
      <select style="color:black" required name="gen" class="form control mt-3">
       <option style="color:black" value="MALE">MALE</option>
       <option style="color:black" value="FEMALE">FEMALE</option>
       <option style="color:black" value="OTHER">OTHER</option>
      </select>

      <br>

		<label class="mt-3">PACKAGE <abbr title="This field is mandatory" aria-label="required"></abbr></label>
      <select style="color:black" required name="package" class="form-control mt-3">
       <option style="color:black" value="MONTHLY">MONTHLY</option>
       <option style="color:black" value="3 MONTHS">3 MONTHS</option>
       <option style="color:black" value="6 MONTHS">6 MONTHS</option>
       <option style="color:black" value="ANNUAL">ANNUAL</option>
      </select>

     <br>

    <label class="mt-3">FEES STATUS <abbr title="This field is mandatory" aria-label="required"></abbr></label>
      <select style="color:black" required name="fstatus" class="form control mt-3">
        <option style="color:black" value="DONE">DONE</option>
        <option style="color:black" value="PENDING">PENDING</option>
     </select>

     <br>

		<label class="mt-3">MOBILE NO <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="tel" pattern="[0-9]{10}" required name="mobile_no" class="form-control">
    <small>Format: 1234567890</small>

    <br>

    <label class="mt-3">TRAINER NAME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
    <select style="color:black" required name="tr_name" class="form control mt-3">
      <option disabled selected> CHOOSE TRAINER </option>
         <?php
         $records = mysqli_query($conn, "SELECT tr_name From trainer");
 
          while($data = mysqli_fetch_array($records))
          {
              echo "<option value=". $data['tr_name'] .">" .$data['tr_name'] ."</option>";
          }
      ?>
    </select>

      <br>

		<button class="btn btn-dark mt-3" type="submit" name="member">ADD</button>
	</form>
</div>