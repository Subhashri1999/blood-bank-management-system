<?php
include "connect.php";
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $place=$_POST['place'];
  $phone=$_POST['phone'];
  $bg=$_POST['bg'];
  if($name!="" && $email!="" && $gender!="" && $phone!="" && $bg!=""){
      
      $sq1="INSERT INTO details (name,email,gender,phone,BG,place) VALUES('$name','$email','$gender','$phone','$bg','$place')";
      if($con->query($sq1)){
        echo "data stored";
        header("location:12345.php");

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
	
	<form method="post" action="1234.php">
		<h1>Details:</h1>
		
		<div>
			<label>Name:</label>
			<input type="textarea" name="name" placeholder="Enter name:">
		</div>
			<label>Phone number:</label>
			<input type="number" name="phone" maxlength="10" minlength="10" placeholder="Enter phone number">
		</div>
		<div>
			<label>E-mail:</label>
			<input type="e-mail" name="email" placeholder="Enter e-mail">
		</div>
    <div>
         <label>Gender:</label>
		     <input type="text" name="gender" placeholder="Enter gender">
       </div>
        <div>
         <label>Blood group:</label>
         <input type="text" name="bg" placeholder="Blood group">
       </div>
       <div>
      <label>Place:</label>
      <input type="textarea" name="place" placeholder="Enter name:">
    </div>
        

          <input type="submit" class="btn btn-primary" name="submit">

	</form>
   </b>
</body>
</html>
