<?php  
	$conn = mysqli_connect("localhost","root","","doctor");
	
	$pname = $_POST['pname'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	$query = " insert into apointment6 values('$pname','$date','$time')";
	$result = mysqli_query($conn,$query);
	
	header("location:index.php");


?>