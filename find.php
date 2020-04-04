<?php
$con=new mysqli('localhost','root','','mysql');
if($con->connect_error)
{
	echo "$con->connect_error";
}

if(isset($_POST['Submit']))
{
   $bg=$_POST['bg'];
   $place=$_POST['place'];
   $sql="SELECT name,gender,email,phone FROM details where bg='$bg' and place='$place'";
   $result=$con->query($sql);
   if($result->num_rows>0){
   while($row=$result->fetch_assoc())
   	{   
   		echo "<br>";
   		echo "name:".$row["name"];
   		echo "     \ngender:".$row["gender"];
   		echo "     \nemail:".$row["email"];
   		echo "     \r\nphone:".$row["phone"];
   	}
   

}
}
?>
<html>

<body>
	<center>
		<form action="find.php" method="post">
 Choose Blood group
 <select name="bg">
 	<option value="O+ve">O+ve</option>
 	<option value="B+ve">B+ve</option>
 	<option value="O-ve">O-ve</option>
 	<option value="AB+ve">AB+ve</option>
 	<option value="AB-ve">AB-ve</option>
 	<option value="B-ve">B-ve</option>
 	<option value="A1B+ve">A1B+ve</option>
 	<option value="A1+ve">A1+ve</option>
 </select>
 <select name="place">
 	<option value="Karaikudi">Karaikudi</option>
 	<option value="Chennai">Chennai</option>
 	<option value="Madurai">Madurai</option>
 	<option value="Tanjore">Tanjore</option>
   <option value="Rajapalayam">Trichy</option>
 	
 </select>

 	<input type="Submit" name="Submit" value="Submit">
 
</form>
</center>
</body>
</html>