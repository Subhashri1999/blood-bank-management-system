<?php
$con=new mysqli('localhost','root','','mysql');
if($con->connect_error)
{
	echo "$con->connect_error";
}



   $sql="SELECT name,gender,email,phone FROM detail";
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
?>
<!DOCTYPE html>
<html>

<body background="bg.jpg">
   <a href="next2.php"><font color="black">Remove requester</font></a><br>

</body>
</html>