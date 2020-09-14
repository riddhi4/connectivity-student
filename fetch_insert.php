<font size = 7>
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
		echo "<a href='fetch_insert.html'>insert</a>";
		mysqli_close($conn);
?>