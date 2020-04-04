<?php
include "connect.php";

  $name=$_GET['name'];
  $dl=$_GET['dl'];
  $vehicle=$_GET['vehicle'];
  $password=$_GET['password'];
  
  if($name!="" && $dl!="" && $vehicle!=""&& $password!=""){
      
      $sq1="INSERT INTO register (name,dl,password,vehicle) VALUES('$name','$dl','$password','$vehicle')";
      if($con->query($sq1)){
        echo "Records added successfully";
        
      }
      
    
      
      
  else{
      echo "<h1>you must fill all the required details";
    }


}
  

?>
