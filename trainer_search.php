<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>TRAINER ID</th>";
	echo "<th>NAME</th>";
	echo "<th>GENDER</th>";
	echo "<th>TIME</th>";
	echo "<th>MOBILE NO</th>";
	echo "<th>PAYMENT STATUS</th>";
	echo "<th>UPDATE</th>";
	echo "<th>DELETE</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `trainer` WHERE CONCAT(`tr_id`,`tr_name`,'gen',`time`,`mobile_no`,'pstatus') LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['tr_id']."</td>";
		echo "<td>".$row['tr_name']."</td>";
		echo "<td>".$row['gen']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['mobile_no']."</td>";
		echo "<td>".$row['pstatus']."</td>";
		echo "<td><a href='home.php?id=$row[tr_id]&info=update_trainer'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[tr_id]&info=delete_trainer'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}
?>