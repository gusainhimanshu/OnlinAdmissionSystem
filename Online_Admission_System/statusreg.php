<?php session_start(); ?>
<?php

include("config.php");


if(isset($_POST['submit']))
{
	$regId = $_POST['registration'];
	//$pass = $_POST['password'];

	if($regId == "" )
	{
		echo "Please fill up the registration ID field to check the status";
		echo "<br/>";
		echo "<a href='statusreg.php'>Go back</a>";
	}
	else
	{
		$result = mysql_query("select * from login where regId='$regId'",$conn)
		or die("Sorry no database found");
		
		$row = mysql_fetch_assoc($result);
		
		if(is_array($row) && !empty($row))
		{
			$validuser = $row['regId'];
			$_SESSION['valid'] = $validuser;
			
			if(isset($_SESSION['valid']))
		{  
			echo "<font size=+2>Form submitted</font>";
			echo"&nbsp;&nbsp;&nbsp;go to";
            echo " &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href='profile.php'>My  Profile </a> ";

		}
		else
			{
				echo "Your application is in the process of submission";
				echo "</br>";
				echo "You will be notified about the submission soon";
			}
			
			
			
		}
		else
		
		{ echo"<br/>";
		  
			echo "Wrong registration ID!! Enter correct registration ID";
			echo "</br>";
			echo "<a href='statusreg.php'> Retype  </a>";
		  

		
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
<br><br>

<title>Enter registration ID</title>
<style>
<!--
.tab { margin-left: 650px; }
-->
</style>
</head>

<body>
<body bgcolor="#FFFFFF">

<p style="margin:0;margin-left:639px;width:300px;"> 
     
	<a href='index.php'><b><font size="2" face="verdana" color="black"> Home</a>
	&nbsp;&nbsp;
	<a href='login.php'><b> <font size="2" face="verdana" color="blue"> Login</a>&nbsp;
	<a href='register.php'><b> <font size="2" face="verdana" color="green"> Register</a>&nbsp;
	<a href='admform.php'><b> <font size="2" face="verdana" color="brown"> Fill the Form</a>
</p>
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
				<td>Registration ID</td>
				<td><input type="text" name="registration" value=""></td>
			</tr></table>
		</table>
		
	</form>
<br><br>
<img src="pic.jpg" alt="edu " width="1000" height="500" />
<div id="logo" style="position:absolute; left:430px; top:600px; "> 

<p ><font size="2" face="verdana" color="blue"> iic batch 2010-12 &copy; 2011  |  www.iic.ac.in </font>
</div>

</body>
</html>