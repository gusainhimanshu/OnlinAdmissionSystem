

		<html>
		<head>

		<body bgcolor="#F0F4F1">
		<form name="form3" method="post" action="">
		<center>
			<table border=1 cellspacing=1 width=768px id=AutoNumber3 bordercolor=white bgcolor=#F0F4F1 style='border-collapse: collapse'>
			<tr><td height="30" colspan="6" align="left"  bgcolor="#F5F5F5" class="tableheader"><strong>Educational Qualification Details &nbsp;&nbsp;&nbsp;&nbsp;</strong>
			</td><br><br>

                    </tr>

                    <tr>

					<td width="150" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Degree</center></strong></td>

                    <td width="150" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Exams Passed</center></strong></td>

                    <td width="138" nowrap="nowrap" bgcolor="#F5F5F5" class="tablecontent2" align="center"><strong><center>Stream/Discipline</center></strong></td>

					<td width="158" nowrap="nowrap" bgcolor="#F5F5F5" class="tablecontent2" align="center"><strong><center>University / Board</center></strong></td>

                    <td width="225" align="center"  bgcolor="#F5F5F5" class="tablecontent2"><strong><center>Year of Passing</center></strong></td>

                    <td width="150" align="center"  bgcolor="#F5F5F5" class="tablecontent2" colspan=""><strong><center>% of Marks</center></strong></td>

					</tr>


		<br><br>
		<tr align=center>

		<td width="150" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent1">Graduation<span class="alert"><font color=red>*</span></td></font>

		<td class="tablecontent1"><center>
		<select size=1 name="grad_xam" id=grad_xam class=listMenu>
		<option value="">Select</option>
		<option value='BSc'>BSc</option>
		<option value='BScCS'>BScCS</option>
		<option value='BScEngg'>BScEngg</option>
		<option value='BBA'>BBA</option>
		<option value='BBM'>BBM</option>
		<option value='BCS'>BCS</option>
		<option value='BE'>BE</option>
		<option value='BIM'>BIM</option>
		<option value='Blib'>Blib</option>
		<option value='BTech'>BTech</option>
		<option value='BCA'>BCA</option>
		<option value='BIS'>BIS</option>
		<option value='BA'>BA</option>
		<option value='BCom'>BCom</option>
		<option value='BIT'>BIT</option>
		<option value='BScIT'>BScIT</option>
		<option value='AMIE'>AMIE</option>
		<option value='AMIETE'>AMIETE</option>
		<option value='Integrated'>Integrated</option>
		</center></select>

		</td>

		<td class=tablecontent1><center>
		<input type=text name="gradstream" id=selstream1 size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent1><center>
		<input type=text name="graduniv" id=university1 size=51 maxlength=50 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent1><center>
		<input type=text name="gradyop" id=selresult1 size=4 maxlength=4  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"> </center></td>

		<td class=tablecontent1><center>
		<input class=textbox2_2 maxlength=2 size=15  onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" name="gradmarks" id=selmark1 /> </center></td>
		</tr>
		<tr align=center>
		<td width="150" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent2">Post Graduation</td>
		<td class="tablecontent2"><center>
		<select class=listMenu name="pgrad_xam" id=seldegree2 size=1 >
		<option value="">Select</option>
		<option value='MS'>MS</option>
		<option value='MCA'>MCA</option>
		<option value='MCM'>MCM</option>
		<option value='MCS'>MCS</option>
		<option value='MSc'>MSc</option>
		<option value='MD'>MD</option>
		<option value='ME'>ME</option>
		<option value='MTech'>MTech</option>
		<option value='MIT'>MIT</option>
		<option value='MA'>MA</option>
		<option value='MBA'>MBA</option>
		<option value='MBAIT'>MBAIT</option>
		<option value='MCom'>MCom</option>
		<option value='MLib'>MLib</option>
		<option value='DOEACCBLEVEL'>DOEACCBLEVEL</option>
		<option value='MScIntegrated'>MScIntegrated</option>
		<option value='MScTech'>MScTech</option>
		<option value='MscCS'>MscCS</option>
		<option value='MscIT'>MscIT</option>
		<option value='MScEngg'>MScEngg</option>
		</center></select>  

		</td>    

		<td class=tablecontent2><center>
		<input type=text name="pgradstream" id=selstream2 size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent2><center>
		<input type=text name="pgraduniv"  id=university2 size=51 maxlength=50 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphachar(event,number2) && alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent2><center>
		<input type=text name="pgradyop" id=selresult2 size=4 maxlength=4 onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"></center></td>

		<td class=tablecontent2><center>
		<input class=textbox2_2 onkeypress="return number(event);" maxlength=2 size=15 name="pgradmarks" id=selmark2 /> 

		</center></td>



           

		</tr>

		<tr align=center>

		<td width="150" height="20" align="center"  bgcolor="#F5F5F5" class="tablecontent1">Diploma/Others</td>

		<td class="tablecontent1"><center>
		<select class=listMenu name="othr_xam" id=seldegree3 size=1 >

		<option value="">Select</option>
		<option value='DOEACCA'>DOEACCA</option>
		<option value='DOEACCB'>DOEACCB</option>
		<option value='DOEACCC'>DOEACCC</option>
		<option value='PGDCA'>PGDCA</option>
		<option value='PGDCM'>PGDCM</option>
		<option value='PGDCS'>PGDCS</option>
		<option value='DIPLOMA IN'>DIPLOMA IN</option>
		<option value='PGD IN'>PGD IN</option>
		<option value='CERTIFICATE IN'>CERTIFICATE IN</option>
		<option value='ADV PGD IN'>ADV PGD IN</option>
		<option value='ADV DIPLOMA IN'>ADV DIPLOMA IN</option>
		</center></select>

		</td>

		<td class=tablecontent1><center><input type=text name="othrstream"  id=selstream3  size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase()" onkeypress="return (alphachar(event,number2)&& alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent1><center><input type=text name="othruniv" id=university3 size=51 maxlength=50 onChange="javascript:this.value=this.value.toUpperCase()" onkeypress="return (alphachar(event,number2)&& alphactrl(event));" onkeydown="return alphactrl(event);"></center></td>

		<td class=tablecontent1><center><input type=text name="othryop" id=selresult3 size=4 maxlength=4  onkeypress="return (number(event)&& numberctrl(event));" onkeydown="return numberctrl(event);"></center></td>

		<td class=tablecontent1><center><input class=textbox2_2 maxlength=2 size=15  onkeypress="return (number(event)&& numberctrl(event));" onkeydown="return numberctrl(event);" name="othrmarks" id=selmark3 /></center></td>   

		</tr>

    
		

		</table>
		</center></div>
		
		<br><br>
		<tr>
       <center>
      <td class="tablecontent2">Course Applied For<font color=red> *</font></td>

      <td class="tablecontent2">

		<select width=30 size=1 name="course_applied"   class="listMenu">

        <option selected value=''>Select

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>

        <option value='MSC(OP)'>MSC(OP)</option>

        <option value='MSC(IT)'>MSC(IT)</option>

        <option value='MSC(PHY)'>MSC(Physics)</option>

        <option value='MSC(CHEM)'>MSC(CHEMISTRY)</option>

        <option value='MSC(CS)'>MSC(CS)</option>

        <option value='MSC(MATHS)'>MSC(Maths)</option>

        <option value='PHD'>PHD</option>

        <option value='OTHER'>Other</option>

	</select></td>
    </tr></div>
	<br><br>
	
	<div align=center><center>
	<p>
	<input  type="submit" value="Submit" name="submit" />  
	</center></div>
	</body>

	</form>
	</html>
	
	<?php
	include ("config.php");

	$query = 'CREATE TABLE edudetails( '.
	      
         'grad_xam VARCHAR(30) ,'.
         'grad_stream VARCHAR(30) , '.
         'grad_univ VARCHAR(20) , '.
         'grad_yop INT(5) , '.
         'grad_marks INT(6),'.
		 'pgrad_xam VARCHAR(30) ,'.
		  'pgrad_stream VARCHAR(30) , '.
         'pgrad_univ VARCHAR(20) , '.
         'pgrad_yop INT(5) , '.
         'pgrad_marks FLOAT(6),'.
		
		 'othr_xam VARCHAR(30),'.
		 'othr_stream VARCHAR(30) , '.
         'othr_univ VARCHAR(20) , '.
         'othr_yop INT(5) , '.
         'othr_marks FLOAT(6),'.
		'course_applied VARCHAR(20) )';
            
	$result = mysql_query($query);

    

	if(isset($_POST['submit']))

	{  
	$grad_xam= $_POST['grad_xam'];
	$grad_stream = $_POST['gradstream'];
    $grad_univ = $_POST['graduniv'];
	$grad_yop = $_POST['gradyop'];
	$grad_marks = $_POST['gradmarks'];
	
	$pgrad_xam = $_POST['pgrad_xam'];
	$pgrad_stream = $_POST['pgradstream'];
    $pgrad_univ = $_POST['pgraduniv'];
	$pgrad_yop = $_POST['pgradyop'];
	$pgrad_marks = $_POST['pgradmarks'];
	
	$othr_xam = $_POST['othr_xam'];
	$othr_stream = $_POST['othrstream'];
    $othr_univ = $_POST['othruniv'];
	$othr_yop = $_POST['othryop'];
	$othr_marks = $_POST['othrmarks'];
	
    $course_applied = $_POST['course_applied'];
	
    if ($grad_xam == "" || $grad_stream == ""  ||$grad_univ == ""  || $grad_yop == ""  || $grad_marks ==""  || $course_applied == "")
  
		{ 
		echo"<center>";
		echo"<font color=red>";
		echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
	else
		{
		mysql_query("insert into edudetails(grad_xam,grad_stream,grad_univ,grad_yop,grad_marks,pgrad_xam,pgrad_stream,pgrad_univ,pgrad_yop,pgrad_marks,othr_xam,othr_stream,othr_univ,othr_yop,othr_marks,course_applied) 
		values('$grad_xam','$grad_stream','$grad_univ','$grad_yop','$grad_marks','$pgrad_xam','$pgrad_stream','$pgrad_univ','$pgrad_yop','$pgrad_marks','$othr_xam','$othr_stream','$othr_univ','$othr_yop','$othr_marks','$course_applied')",$conn)
		or die("Error ! refresh the page or relogin .");
		
		echo "<br/>";
		echo " Education Details Submitted  ";
		echo "<br/>";
	    echo "<a href='up.php'>Click to Proceed </a>";
	}
	}
	?>



    