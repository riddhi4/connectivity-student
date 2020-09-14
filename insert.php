<?php
	include("connection.php");
	$no = $_POST['txtno'];
	$nm = $_POST['txtnm'];
	$sem = $_POST['txtsm'];
	$div = $_POST['txtdv'];
	$bdate = $_POST['txtbdate'];
	$clg = $_POST['txtclg'];
	
	$insert = "insert into tbl_student
			set
			`stud_no` = '$no',
			`stud_name` = '$nm',
			`stud_sem` = '$sem',
			`stud_div` = '$div',
			`stud_bdate` = '$bdate',
			`stud_clg` = '$clg'";
	mysqli_query($conn,$insert);
	echo "<a href=insert.html>BACK TO HOME</a>"
?>