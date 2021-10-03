<?php
require('db.php');


$name="";
if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>MEMBER ID</th>";
	echo "<th>NAME</th>";
	echo "<th>AGE</th>";
	echo "<th>DATE OF JOINING</th>";
	echo "<th>GENDER</th>";
	echo "<th>PACKAGE</th>";
	echo "<th>FEES STATUS</th>";
	echo "<th>MOBILE NO</th>";
	echo "<th>TRAINER NAME</th>";
	echo "<th>UPDATE</th>";
	echo "<th>DELETE</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `member` WHERE CONCAT(`m_id`,`m_name`,`age`,`doj`,'gen',`package`,'fstatus','mobile_no','tr_name') LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['m_id']."</td>";
		echo "<td>".$row['m_name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['doj']."</td>";
		echo "<td>".$row['gen']."</td>";
		echo "<td>".$row['package']."</td>";
		echo "<td>".$row['fstatus']."</td>";
		echo "<td>".$row['mobile_no']."</td>";
		echo "<td>".$row['tr_name']."</td>";
		echo "<td><a href='home.php?id=$row[m_id]&info=update_member'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[m_id]&info=delete_member'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}

?>