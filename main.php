<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.fling-minislide {width:550px; height:500px; overflow:hidden; position:relative; align-self: left }
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 500px; height: 550px;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}} 
.fling-minislide img:nth-child(4){animation-delay:0s;}
.fling-minislide img:nth-child(3){animation-delay:5s;}
.fling-minislide img:nth-child(2){animation-delay:10s;}
.fling-minislide img:nth-child(1){animation-delay:15s;}
.size
{
	size: 100px;
}
.wrapper
{
	text-align: right;
}
.button
{
	position: absolute;
	top: 50%;
	text-align: right;
}
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  scroll-behavior: 
}
html, body
{
	overflow: hidden;
}


.left {
  left: 0;
  
}


.right {
  right: 0;
}


.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


.centered img {
  width: 150px;
  border-radius: 50%;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 1px 10px;
  text-align: center;
}


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 5px;
  text-decoration: none;
  font-size: 15px; 
  line-height: 15px;
  border-radius: 4px;
}


.header a.logo {
  font-size: 15px;
  font-weight: bold;
}

.header a.hover {
  background-color: black;
  color: black;
}


.header a.active {
  background-color: dodgerblue;
  color: white;
}


.header-right {
  float: right;
}

 
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
<body background="bg.jpg" scroll="no">
	<div class="header">
		
 <i> <h1 class="logo">Blood Bank System</h1></i>
  
</div>
	


</div>
 <div class="split right">
  <div class="wrapper" class="centered">
  	<br>
  	<br>
  	<br>
  	<br>
  <input type="button" onclick="parent.location='login2.php'" value="User login">
  <input type="button" onclick="parent.location='login1.php'" value="Admin">
  <br>
  <input type="button" onclick="parent.location='register.php'" value="Register as a new user">
  <br>
  <input type="button" onclick="parent.location='hospital.php'" value="Hospital login">
  
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<font size="10">
<u><marquee direction="up" class="size">Every drop of blood is precious.<br>Donate Blood.<br>Save life.<br></marquee></u>
</font>
</div>
<div class="split left">
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="fling-minislide" class="centered">
   
  <img src="1.jpeg" alt="Slide 4"/>
  <img src="123.png" alt="Slide 3" />

  <img src="111.png" alt="Slide 2" />

  <img src="1234.jpeg" alt="Slide 1" />
 </div>

</body>
</html>
 