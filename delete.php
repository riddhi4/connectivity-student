<?php

	include("connection.php");
	
	$rollno = $_POST['t1'];
	$delete = "delete from tbl_student
			where `stud_no`=$rollno";

	mysqli_query($conn,$delete);

	echo "You have deleted".mysqli_affected_rows($conn)."rows(s)";
	echo "<a href=delete.html>BACK TO HOME</a>"
?>