<?php
include "connect.php";
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $venue=$_POST['venue'];
  $date1=$_POST['date1'];
  $time1=$_POST['time1'];
  
  if($name!="" && $venue!="" && $date1!=""&& $time1!=""){
      
      $sq1="INSERT INTO camps (name,venue,Date1,Time1) VALUES('$name','$venue','$date1','$time1')";
      if($con->query($sq1)){
        echo "data stored";
        header("location:1234.php");

      
      }
    
      else{
          echo "<h1>password and confirm password must be same";

        }
      
 

}
}

  

?>
<html>
<head>
	<title>
		Registration form
	</title>
	<style>
	

form {
  margin: 0 auto;
  width: 1000px;
 
  border: 1px solid #CCC;
  border-radius: 1em;
}



label {
  display: inline-block;
  width: 150px;
  text-align: right;
}

input, textarea {
  
  font: 1em sans-serif;

  
  width: 200px;
  box-sizing: border-box;


  border: 1px solid #999;
}

input:focus, textarea:focus {

  border-color: #000;
}

textarea {

  vertical-align: top;
  

  height: 5em;
}

.button {

  
}
.important{
	width: 300px;
}
.Photo{
    align-self: left;
	width: 50px;
	height: 50px;
}

button{
  margin-left: .5em;
  width: 100px;
}
body{
	background-image: url(2.jpg);
	
    
	opacity: 50;




}
.blurr
{
	filter: blur(5px);
}


</style>


</head>
<body>
	<b>
	
	<form method="post" action="123.php">
		<h1> Camp Details:</h1>
		
		<div>
			<label>Camp Name:</label>
			<input type="textarea" name="name" placeholder="Enter camp name:">
		</div>
		<div>
			<label>Venue:</label>
			<input type="textarea" name="venue" placeholder="Enter venue:">
		</div>
		<div>
			<label>Date:</label>
			<input type="textarea" name="date1" placeholder="Enter date:">
		</div>
		<div>
			<label>Time:</label>
			<input type="textarea" name="time1" placeholder="Enter time:">
		</div>
		<div>	
          <input type="submit" class="btn btn-primary" name="submit">
      </div>

	</form>
   </b>
 </body>
</html>
