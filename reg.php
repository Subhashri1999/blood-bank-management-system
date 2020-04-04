<?php
$con=new mysqli('localhost','root','','mini');
if($con->connect_error)
{
	echo "$con->connect_error";
}
$name =  $_GET['name'];
$dl =  $_GET['dl'];
$vehicle =  $_GET['vehicle'];
$password =  $_GET['password'];

$sq1="INSERT INTO register (name,dl,password,vehicle) VALUES('$name','$dl','$password','$vehicle')";
if(mysqli_query($dbc, $sql)){
echo "Records added successfully";
} else{
echo "ERROR";
}
mysqli_close($dbc);
?>