<?php
	include("connection.php");

	$old=$_POST['t1'];
	$new=$_POST['t2'];

	$update = "update tbl_student set `stud_name`='$new'
			where `stud_name`='$old'";

	mysqli_query($conn,$update);

	echo mysqli_affected_rows($conn)." row(s) are updated<br>";
?>