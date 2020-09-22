
<html>
<br><br>
<hr width="60%">
<h1 align="center" style="color:red;"> Welcome to WAAH CARS</h1>
<?php
$con = mysqli_connect("localhost","root","",mytable);     
if (!$con) 
die("Error: " . mysqli_connect_error());
$name=$_REQUEST["name"];
$msg=$_REQUEST["msg"];
$sql = "insert into feedback(name,msg) values('$name','$msg')";
$result = $con->query($sql);
if($result)	
	echo "<hr> <h1 style='color:red;' align='center'>Feedback accepted, thank you!</h1>";
else
	echo "Error occured";
$con->close();
?>
