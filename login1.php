<?php
include "connect.php";

?>

<html>
  <head>

  
<style>
  body{
   background-image:url("bg2.jpg"); 
  background-repeat:no-repeat; 
  background-position:center; 
  background-size:cover;
   padding:10px;
 }

.form-heading { color:#fff; font-size:23px;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}


.btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}

.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>
  </head>
<body>
<div>
<h1 class="form-heading">Admin Login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your username and password</p>
   </div>
    <form id="Login" method="post">

        <div class="form-group">


            <input  class="form-control" placeholder="username" name="username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">

        </div>
        
        <input type="submit" class="btn btn-primary" name="Login">

    </form>
    </div>

</div></div></div>


</body>

<?php

if(isset($_POST['Login']))
{
  $name=$_POST['username'];
  $pass=$_POST['password'];
  
  
    $sql="SELECT username,password from admin WHERE username='$name' AND password='$pass'";
    $result=$con->query($sql);
    #if(!$row=$result->fetch_assoc())
    #{
      echo "Error";


    #}
    #else
    #{
      echo "Correct";
      header("location:admin2.php");
    #}
  
}
?>
</html>
