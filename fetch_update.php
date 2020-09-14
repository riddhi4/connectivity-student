<?php
	include("connection.php");

	$old=$_POST['t1'];
	$new=$_POST['t2'];

	$update = "update tbl_student set `stud_name`='$new'
			where `stud_name`='$old'";

	mysqli_query($conn,$update);

	echo mysqli_affected_rows($conn)." row(s) are updated<br>";
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
		echo "<a href='fetch_update.html'>update</a>";
		mysqli_close($conn);

?>