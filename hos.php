<?php
$con=new mysqli('localhost','root','','mysql');
if($con->connect_error)
{
	echo "$con->connect_error";
}

if(isset($_POST['Submit']))
{
   $name=$_POST['name'];
   $sql="DELETE FROM details where name='$name'";
   if($con->query($sql))
   	echo "Success";

   
}
?>
<html>

<body background="bg.jpg">
	<h3><center>Remove the diseased</center></h3>
	<form method="post">
	<select name="name">
		<option></option>
		   <?php
		     $sql="SELECT name FROM details";
		     if($result=$con->query($sql)){
		     	if($result->num_rows){
		     		while($row=$result->fetch_object()){
		     			echo "<option value='$row->name' id='option'>";
		     			echo $row->name;
		     			echo "<br>";
		     			echo "</option>"; 
		     		}
		     	}
		     }
            ?>

		
	</select>
	<input type="Submit" name="Submit" value="Submit">
	<br>
    
   </form>
</body>
</html>