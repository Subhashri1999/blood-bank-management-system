<?php
include "connect.php";
if(isset($_POST['Login']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
  $phone=$_POST['phone'];
  $bg=$_POST['bg'];
  echo "$phone";
  if($name!="" && $email!="" && $pass!=""&& $pass1!=""&& $gender!="" && $phone!="" && $bg!=""){
      if($pass==$pass1){
      $sq1="INSERT INTO detail (name,email,password,gender,phone,BG) VALUES('$name','$email','$pass','$gender','$phone','$bg')";
      if($con->query($sq1)){
        echo "data stored";
        header("location:next.php");

      }
      }
    
      else{
          echo "<h1>password and confirm password must be same";

        }
      }
  else{
      echo "<h1>you must fill all the required details";
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
	
	<form method="post" action="register.php">
		<h1>Details:</h1>
		
		<div>
			<label>Name:</label>
			<input type="textarea" name="name" placeholder="Enter name:">
		</div>
			<label>Phone number:</label>
			<input type="number" name="phone" placeholder="Enter phone number">
		</div>
		<div>
			<label>E-mail:</label>
			<input type="e-mail" name="email" placeholder="Enter e-mail">
		</div>
         <label>Gender:</label>
		     <input type="text" name="gender" placeholder="Enter gender">
        <div>
        	
        </div>
        <div>
          </div>
         <label>Blood group:</label>
         <input type="text" name="bg" placeholder="Blood group">
        <div>
          <label>Password</label>
          <input type="Password" name="pass" placeholder="Enter your Password">
          </div>   
          <div>
          <label>Re-enter your Password</label>
          <input type="Password" name="pass1" placeholder="Re-Enter your Password">
          </div>        
          <input type="submit" class="btn btn-primary" name="Login">

	</form>
   </b>
</body>
</html>
