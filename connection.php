<font size = 7>
<?php
	$conn = mysqli_connect("localhost","root","");
	if(!$conn)
	{
		echo mysqli_error();
	}
	else
	{
		echo "Connection is connect<br>";
	}
	$db = mysqli_select_db($conn,"db_student");
	if(!$db)
	{
		echo mysqli_error();
	}
	else
	{
		echo "Database connect<br>";
	}
?>