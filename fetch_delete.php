<?php

	include("connection.php");
	
	$rollno = $_POST['t1'];
	$delete = "delete from tbl_student
			where `stud_no`=$rollno";

	mysqli_query($conn,$delete);

	echo "You have deleted ".mysqli_affected_rows($conn)." rows(s)";
	echo "<a href=delete.html>BACK TO HOME</a>";
	$sel = "select *from tbl_student";
	$result=mysqli_query($conn,$sel);

	echo "<table border>
		<tr>
		<td> name </td>
		<td> age </td>
		<td> sem </td>
		<td> div </td>
		<td> clg </td>
		<tr>";

		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['stud_no']."</td>";
			echo "<td>".$row['stud_name']."</td>";
			echo "<td>".$row['stud_sem']."</td>";
			echo "<td>".$row['stud_div']."</td>";
			echo "<td>".$row['stud_clg']."</td>";
			echo "</tr>";
		}
		echo "</table>";	
		echo "<a href='fetch_delete.html'>delete</a>";
		mysqli_close($conn);
?>