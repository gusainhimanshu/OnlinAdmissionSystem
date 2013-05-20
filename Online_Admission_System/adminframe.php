<html>
<head>
<style> 
table{color:white} 
</style>
<title>ADMIN PAGE</title>
<style>
<!--
.tab { margin-left: 270px; }
-->
</style>
</head>

<body>
<p style="margin:0;margin-left:300px;width:400px;"> <a href='index.php'><b> <font size="2" face="verdana" color="green"> Home</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='login.php'><b> <font size="2" face="verdana" color="green"> Login</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://www.iic.ac.in/'><b> <font size="2" face="verdana" color="green"> Contact us</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='http://localhost/phpmyadmin/'><b> <font size="2" face="verdana" color="green"> Edit </a>

<body bgcolor="#000000">
</body>


<div id="logo" style="position:absolute; left:30px; top:150px; width: 600px; height: 200px;"> 

<img src="regpic.jpg" alt="Registration " width="1024" height="350" />
</b>
<body bgcolor="">
<div id="logo" style="position:absolute; left:30px; top:110px; width: 600px; height: 200px;"> 

<?php
 session_start();

if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysql_query("select * from login",$conn);
	
	echo "Welcome admin ! <a href='logout.php'>Logout</a><br/>";
	echo "<b>User List:</b><br/>";

	echo "<table border='1'>
<tr>

<td>Firstname</td>
<td>Lastname</td>
<td>Email-Id</td>
<td>Username</td>
<td>Password</td>
<td>dtime</td>
<td>regId</td>
<td>submission</td>
</tr>";
	while($row = mysql_fetch_assoc($result))
	{
		 echo "<tr>";
		
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";  
  echo "<td>" . $row['password'] . "</td>";  
  echo "<td>" . $row['dtime'] . "</td>";  
  echo "<td>" . $row['regId'] . "</td>";  
  echo "<td>" . $row['submission'] . "</td>";  
       
  
  
  echo "</tr>";
	}
	echo "</table>";
}
echo"</font>";
?> 
</td></tr>

<div id="logo" style="position:absolute; left:300px; top:260px; "> 

<p ><font size="2" face="verdana" color="green"> iic batch 2010-12 &copy; 2011  |  www.iic.ac.in </font>
<font size="2" face="verdana" color="green">
</font>

</html>
