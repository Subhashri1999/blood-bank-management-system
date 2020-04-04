<?php
include "connect.php";

if(isset($_POST['Login']))
{
  $name=$_POST['username'];
  $pass=$_POST['password'];
  
  
    $sql="SELECT name,password from login WHERE name='$name' AND password='$pass'";
    $result=$con->query($sql);
    if(!$row=$result->fetch_assoc())
    {
      echo "Error";

    }
    else
    {
      echo "Correct";
      header("location:find.php");
    }
  
}
?>

<html>
<head>
<title>
Login 
</title>
<style>
body{
  background-color: black;
  background-repeat:no-repeat;
  background-size:cover;
  border-radius:20px;
  margin-left: 35%;

}
h1
{
  text-align:center;
  color:white;
  background-color:none;
  border-radius:20px;
  font-family:"verdana";
  margin-right: 47%;
}
button {
  background-color:#4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:20px;
  margin: 4px 2px;
  cursor: pointer;
}
form
{
  background-color: lightgrey;
  width: 300px;
  border: 25px  red green;
  padding: 35px;
  margin: 35px;
  font-family:"verdana";
  border-radius:20px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
</head>
<body>
<b><h1>ADMIN LOGIN</h1></b>

<form method="post" action="login3.php">
<label for="Login"><h2 align="center">Login</h2></label>
<label for="username">Username</label>
<input type="text" name="username" size="35" placeholder="Enter Your Username"required><br>
<br>
<label for="password">Password</label>
<input type="password" name ="password" size="35" placeholder="Enter the password"required><br><br>
<br>
<button>Back</button></a>
<button style="border-radius:20px;" name="Login">Continue</button></a>

</form>
</body>
</html>
