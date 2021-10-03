<?php
require('db.php');



if (isset($_REQUEST['member'])) {

  $name = mysqli_real_escape_string($conn, $_REQUEST['m_name']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
  $doj = mysqli_real_escape_string($conn, $_REQUEST['doj']);
  $gen = mysqli_real_escape_string($conn, $_REQUEST['gen']);
  $package = mysqli_real_escape_string($conn, $_REQUEST['package']);
  $fstatus = mysqli_real_escape_string($conn, $_REQUEST['fstatus']);
  $mobile_no = mysqli_real_escape_string($conn, $_REQUEST['mobile_no']);
  $trainer_name = mysqli_real_escape_string($conn, $_REQUEST['tr_name']);
 
  
  $update_query="update member set m_name='$name',age='$age',doj='$doj',gen='$gen',package='$package',fstatus='$fstatus',mobile_no='$mobile_no',tr_name='$trainer_name' where m_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Member Area Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from member where m_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);  
?>



<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>UPDATE MEMBER</h3></div>
		 <?php  
      echo @$err;
     ?>

		<label class="mt-3">MEMBER NAME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="text" required name="m_name" value="<?php echo @$res['m_name'];?>" class="form-control">

		<label class="mt-3">AGE <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="number" min="18" max="50" required name="age" value="<?php echo @$res['age'];?>" class="form-control">
    <small>Format: Age must be in range of 18-50</small>

      <br>

		<label class="mt-3">DATE OF JOINING <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		<input type="date" required name="doj" value="<?php echo @$res['doj'];?>" class="form-control">

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
	     <input type="text" pattern="[0-9]{10}" required name="mobile_no" value="<?php echo @$res['mobile_no'];?>" class="form-control">
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

		  <button class="btn btn-dark mt-3" type="submit" name="member">UPDATE</button>
	</form>
</div>