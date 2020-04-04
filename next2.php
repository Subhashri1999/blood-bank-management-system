<?php
$con=new mysqli('localhost','root','','mysql');
if($con->connect_error)
{
	echo "$con->connect_error";
}

if(isset($_POST['Submit']))
{
   $name=$_POST['name'];
   $sql="DELETE FROM detail where name='$name'";
   $result=$con->query($sql);
   
}
?>
<html>

<body>
	<center>
		<form action="next2.php" method="post">
       <div>
         <label>Enter Name:</label>
         <input type="textarea" name="name" placeholder="Enter name:">
      </div>
 	<input type="Submit" name="Submit" value="Submit">
 
</form>
</center>
</body>
</html>