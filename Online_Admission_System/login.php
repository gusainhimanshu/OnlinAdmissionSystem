<?php session_start(); ?>
<?php

include("config.php");


if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "himanshu" && $pass == "himanshu")
	{
		echo "Welcome Admin <a href='adminframe.php'> click here to see the tables</a>";
	}
	else if($user == "" || $pass == "")
	{
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	}
	else
	{
		$result = mysql_query("select * from login where username='$user' and password= '$pass'",$conn)
		or die("Could not execute the select query no record found .");
		
		$row = mysql_fetch_assoc($result);
		
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
		}
		else
		{echo"<br/>";
			echo "Invalid username or password.";
		
			echo "<a href='login.php'> Retype  </a>";
		}

		if(isset($_SESSION['valid']))
		{
	
       
			echo "<a href='admform.php'>FILL THE APPLICATION FORM </a> | <a href='logout.php'>Logout</a>";
			echo "| <a href='statusreg.php'>Check status</a>";	
			echo "<br/>";
			echo "Signed in as : ".$_SESSION['valid']."!";
		}
	}
}

else
{

?>
<?php
}
?>
<html>
<head>

<title>Login</title>
<style>
<!--
.tab { margin-left: 650px; }
-->
</style>
</head>

<body>
<body bgcolor="#FFFFFF">

<MARQUEE BEHAVIOR=ALTERNATE SCROLLDELAY=250>
<b> <font size="3" face="verdana" color="blue"> Online Admission Form Submission   <a href='register.php'> Register Now</a></b>  </font><IMG SRC="pic.jpg" HEIGHT=40 WIDTH=82 ALT="Idocs Guide to HTML">
</MARQUEE>
	<p class="tab"> <font size="+2"></font><p>
	 <br/>
	<form name="formlog" method="post" action="" autocomplete="off" >
		<table width="75%" border="0">
		<table align="right">
			<tr> 
			
		     <td width="27%">&nbsp;</td>
				<td width="73%"><input type="submit" name="submit" value="Submit"></td>
			
			</tr>
			</table>
			<table align="right">
			<tr> 
	<table align="right">
				<td>Password</td>
				<td><input type="password" name="password" value=""></td>
			</tr></table>
			<tr> <table align="right">
				<td>Username</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
		</table>
		
	</form>
<br><br>
<img src="pic.jpg" alt="edu " width="1000" height="500" />
<div id="logo" style="position:absolute; left:430px; top:600px; "> 

<p ><font size="2" face="verdana" color="blue"> iic batch 2010-12 &copy; 2011  |  www.iic.ac.in </font>
</div>

</body>
</html>