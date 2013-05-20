<html>
<head>

<title>Register</title>
<style>
<!--
.tab { margin-left: 270px; }
-->
</style>

</head>

<body>
<p style="margin:0;margin-left:300px;width:400px;"> <a href='index.php'><b> <font size="2" face="verdana" color="green"> Home</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='login.php'><b> <font size="2" face="verdana" color="green"> Login</a>
&nbsp;&nbsp;&nbsp;&nbsp; <a href='contact.php'><b> <font size="2" face="verdana" color="green"> Contact us</a>



<div id="logo" style="position:absolute; left:300px; top:150px; width: 600px; height: 200px;"> 
	<p><font size="+2"color="green">Register:</font></p>
	</br>
	<form name="form1" method="post" action="" autocomplete="off">
	<font size="3" face="verdana" color="">
	
		<table width="115%" border="0">
	
			<tr> 
				<td width="27%"><font size="3" face="verdana" color="green">First Name</td>
				<td width="73%"><input type="text" name="firstname"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Last Name</td>
				<td><input type="text" name="lastname"></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Email</td>
				<td><input type="text" name="email"></td>
				
			</tr>
		
			<tr> 
				<td><font size="3" face="verdana" color="green" >Username </td>
				<td><input type="text" name="username" value=""></td>
				
			</tr>
			
			<tr> 
				<td><font size="3" face="verdana" color="green">Password</td>
				<td><input type="password" name="password"></td>
			
			</tr>
			
			<tr> 
				<td>&nbsp;</td>
				<td> <INPUT NAME="name" TYPE="reset" VALUE="Reset">&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</div>
</br>
</br>
<img src="regpic.jpg" alt="Registration " width="1024" height="350" />
</b>
<body bgcolor="#000000">

<div id="logo" style="position:absolute; left:330px; top:400px; "> 

<p ><font size="2" face="verdana" color="green"> iic batch 2010-12 &copy; 2011  |  www.iic.ac.in </font>
</body>	
</html>
<?php

include("config.php");

$query = 'CREATE TABLE login( '.
         'firstname VARCHAR(20) NOT NULL, '.
		 'lastname VARCHAR(20) NOT NULL, '.
         'email VARCHAR(30) NOT NULL, '.
         'username VARCHAR(30) NOT NULL, '.
		 'password VARCHAR(30)NOT NULL, '.
		 'dtime DATE NOT NULL, '.
		'regId VARCHAR(10) NOT NULL, '.
		'submission INTEGER )';

$result = mysql_query($query);

if(isset($_POST['submit']))
{   

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
    
	if($user == "" || $pass == "" )
	{
			echo "<br/>";echo "<br/>";echo "<br/>";
		echo "Please fill up all the details.";
		echo "<br/>";
	}
	else
	{  $regexp = "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
      // Validate the syntax 
		if(!preg_match($regexp, $email))
		{
			echo "<br/>";
			echo "Email address entered is not valid.";
			echo "</br>";
			echo "Please enter a correct email address";
			
		}
		else 
		{
			$regId=mt_rand(100000000,999999999);
			mysql_query("insert into login(firstname,lastname,email,username,password,regId,dtime) values('$firstname','$lastname','$email','$user','$pass','$regId',now())",$conn)
			or die("Error ! refresh the page or relogin .");
		
			echo "<br/>";		echo "<br/>";		//echo "<br/>";
			echo "Your registration id is $regId.";
			echo "</br>";
			echo "Please note down your registration id";
			echo "</br>";
			echo " use this for checking status";
		//echo "Registration successfully done now login ";
			echo "<br/>";
			echo "<a href='login.php'></a>";
		}
	}
}


?>

