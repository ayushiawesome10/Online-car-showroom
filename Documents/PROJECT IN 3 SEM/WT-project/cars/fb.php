<?php
	$con=mysqli_connect('localhost','root','','mytable');
	if(!$con){
		echo "not connected to server";
	}
	$name=$_POST['name'];
	$msg=$_POST['msg'];
	$sql="INSERT INTO feedback VALUES ('$name','$msg')";
	if (mysqli_query($con, $sql))
	 	echo "Inserted successfully";
	else
   		echo "Error:".mysqli_error($con);
	mysqli_close($con);
?>