<?php
require('db.php');



if (isset($_REQUEST['trainer'])) {

  $name = mysqli_real_escape_string($conn, $_REQUEST['tr_name']);
  $gen = mysqli_real_escape_string($conn, $_REQUEST['gen']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
  $mobile_no = mysqli_real_escape_string($conn, $_REQUEST['mobile_no']);
  $pstatus = mysqli_real_escape_string($conn, $_REQUEST['pstatus']);

  $update_query="update trainer set tr_name='$name',gen='$gen',time='$time',mobile_no='$mobile_no',pstatus='$pstatus' where tr_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Trainer Details updated</b></div>";
}
$con=mysqli_query($conn,"select * from trainer where tr_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>




<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>UPDATE TRAINER</h3>
		 <?php 
    echo @$err;

    ?>
		<label class="mt-3">TRAINER NAME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		  <input type="text" required name="tr_name" value="<?php echo @$res['tr_name'];?>" class="form-control">

		<label class="mt-3">GENDER <abbr title="This field is mandatory" aria-label="required"></abbr></label>
       <select style="color:black" required name="gen" class="form control mt-3">
          <option style="color:black" value="MALE">MALE</option>
          <option style="color:black" value="FEMALE">FEMALE</option>
           <option style="color:black" value="OTHER">OTHER</option>
       </select>

       <br>

		<label class="mt-3">TIME <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		  <input type="time" required name="time" value="<?php echo @$res['time'];?>" class="form-control">

		<label class="mt-3">MOBILE NO <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		  <input type="tel" pattern="[0-9]{10}" required name="mobile_no" value="<?php echo @$res['mobile_no'];?>" class="form-control">
       <small>Format: 1234567890</small>

       <br>

		<label class="mt-3">PAYMENT STATUS <abbr title="This field is mandatory" aria-label="required"></abbr></label>
		  <select style="color:black" required name="pstatus" class="form control mt-3">
        <option style="color:black" value="DONE">DONE</option>
        <option style="color:black" value="PENDING">PENDING</option>
      </select>
    
    <br>
    
		<button class="btn btn-dark mt-3" type="submit" name="trainer">UPDATE</button>
	</form>
</div>