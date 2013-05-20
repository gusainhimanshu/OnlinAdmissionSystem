<?php session_start();
include("config.php");
 ?>

<html>
<head>
<title>Homepage</title>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#F0F4F1">

<p style="margin:0;margin-left:700px;width:300px;"> 

<a href='index.php'><b><font size="2" face="verdana" color="black"> Home</a>
<a href='login.php'><b> <font size="2" face="verdana" color="blue"> Login</a>
<a href='register.php'><b> <font size="2" face="verdana" color="green"> Register</a>

</p>

<div id="logo" style="margin:0;margin-left:100px; position:absolute; left:70px; top:100px; width: 700px; height: 300px;"> 
<b> <font size="6" face="verdana" color="blue"> Online Admission Form Submission</font></b>
</div>

<p style="margin:0;margin-left:80px;width:800px;"> 
<img src="blank.bmp" alt="edu " width="780" height="700" /></p>

<div id="logo" style="position:absolute; left:60px; top:170px; width: 700px; height: 300px;"> 

<b><p style="margin:0;margin-left:100px; text-align:center;" > The Enroller platform is different from a typical software development scenario. It is especially designed for academic institutes' admission needs and no additional software development is required. Compared to custom software development, moving to Enroller will be cost effective and time saving. Enroller acts as an interface between your institute and applicants. It provides a platform to publish, collect &amp; manage admission forms. Institutes benefit by reducing cost. Applicants benefit by easy and flexible process.</b>
<img src="enroll.jpg" alt="edu " width="625" height="222" /></p>


<p style="margin:0;margin-left:100px;"> <font size="4" face="verdana" color="brown">Session to fill  the application form begins once registration is done or Login is done .....</font>
</p>
<br><br>
<p style="margin:0;margin-left:100px;">
<a href="how.php">HOW TO APPLY</a> &nbsp;&nbsp;&nbsp;
<a  href="howphoto.php"> Guidelines for scanning the Photograph , Signature and  Draft</a> 
<br><br>
You must be logged in to fill the admission form / check the status of application . </p><br>


<?php

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
	
	
	

	while($row = mysql_fetch_assoc($result))
	{
		$username = $row['username'];
		$password = $row['password'];
		$date = $row['dtime'];
		
	}
	
}
else
{
	//echo "</p You must be logged in to fill the admission form / check the status of application . .<br/>";	
}

?>

<br><br><br><center>
<p style="margin:0;margin-left:100px; "><font size="1" color="black">
 iic batch 2010-12 &copy; 2011  |  www.iic.ac.in
<p></font></center>
</div>
</body>
</html>
