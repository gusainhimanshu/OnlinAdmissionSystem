<html>
<head>
<title>&nbsp;&nbsp;&nbsp;&nbsp; Online Admission form for X university , various courses </title>
</head>

<CENTER>
<body bgcolor="#F0F4F1">


<form id="reg_frm" name="reg_frm"  method="post" autocomplete="off" >
<BODY bgColor="#F0F4F1" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">
<table border=1 cellspacing=1 width=1024px id=AutoNumber2 bordercolor=white class="bgcolr" style='border-collapse: collapse'>
<tr bordercolor=white>

     <td colspan=2 bgcolor=white bordercolor=white align=center>
	 <font color=#800080>
	 <center>&nbsp;&nbsp;&nbsp;&nbsp Before proceeding, please ensure that you have read <a  href="how.php">HOW TO APPLY</a> instruction to be fed is readily available with you. </font> 

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <font color=#000000><font color=red>*</font>&nbsp;Mandatory Field</font></td>

</tr>

<tr>

     <td colspan=2 bgcolor=white bordercolor=white align=center></td>

</tr>

 
<tr>
                <td height="25" colspan="4" bgcolor="#FCFCFC" class="tableheader"><br><br><b >&nbsp;&nbsp;&nbsp;&nbsp Personal Details :</b></td>
              </tr>

<tr>
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Full Name <font color=#800080 >[as in Secondary School Certificate]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
		<select  class="listMenu" size=1 name="sal" id="seltitle" onchange='disableoption()'>
		<option value=''>Select</option>
		<option value='Shri'>Shri</option>
		<option value='Smt'>Smt.</option>
		<option value='Kum'>Kumari</option>
		</select>
		
	<input type=text name="fullname" size=40 maxlength=40 id=firstname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)"> <br/><font color=#800080>[Please Select Title & do not use any prefix such as Shri or Dr. etc. with Name]</font>
    </td></tr>
	        <tr>
                <td class="tablecontent1"><p>&nbsp;&nbsp;&nbsp;&nbsp Date of Birth : <span class="alert"><font color=red>*</font></span></p></td>
                <td colspan="3" class="tablecontent1">
				
				 <select class=listMenu  size=1 name="bday" id=seldobday >
				 <option value='' selected>Select</option>
				 <option value='01'>01</option>
				 <option value='02'>02</option>
				 <option value='03'>03</option>
				 <option value='04'>04</option>
				 <option value='05'>05</option>
				 <option value='06'>06</option>
				 <option value='07'>07</option>
				 <option value='08'>08</option>
				 <option value='09'>09</option>
				 <option value='10'>10</option>
				 <option value='11'>11</option>
				 <option value='12'>12</option>
				 <option value='13'>13</option>
				 <option value='14'>14</option>
				 <option value='15'>15</option>
				 <option value='16'>16</option>
				 <option value='17'>17</option>
				 <option value='18'>18</option>
				 <option value='19'>19</option>
				 <option value='20'>20</option>
				 <option value='21'>21</option>
				 <option value='22'>22</option>
				 <option value='23'>23</option>
				 <option value='24'>24</option>
				 <option value='25'>25</option>
				 <option value='26'>26</option>
				 <option value='27'>27</option>
				 <option value='28'>28</option>
				 <option value='29'>29</option>
				 <option value='30'>30</option>
				 <option value='31'>31</option>
				 </select> 
				 
				 <select class=listMenu  size=1 name="bmonth" id=seldobmon >
				 <option value='' selected>Select</option>
				 <option value='01'>JANUARY</option>
				 <option value='02'>FEBRUARY</option>
				 <option value='03'>MARCH</option>
				 <option value='04'>APRIL</option>
				 <option value='05'>MAY</option>
				 <option value='06'>JUNE</option>
				 <option value='07'>JULY</option>
				 <option value='08'>AUGUST</option>
				 <option value='09'>SEPTEMBER</option>
				 <option value='10'>OCTOBER</option>
				 <option value='11'>NOVEMBER</option>
				 <option value='12'>DECEMBER</option>
				 </select> 
				 
				 <select class="listMenu"  size="1" name="byear" id="seldobyear" >
                 <option value=""  selected="selected">Year</option>
				 <option value="1983" >1983</option>
			     <option value="1984" >1984</option>
				 <option value="1985" >1985</option>
			     <option value="1986" >1986</option>
				 <option value="1987" >1987</option>
			     <option value="1988" >1988</option>
				 <option value="1989" >1989</option>
			     <option value="1990" >1990</option>
				 <option value="1991" >1991</option>
			     <option value="1992" >1992</option>

                 </select>
				 </td>
				 </tr>
<tr>
                <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Age as on 05.08.2011
 </td>
                <td colspan="3" class="tablecontent2">
				<input  size="3" name="age"  id="txtage" />
				</td>
                </tr>
			    <tr>
				<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Marital Status<span class="alert"><font color=red>*</font></span></td>
				<td class="tablecontent1">
				
				<select  class="listMenu" name="Mstatus" id="Mstatus">
				<option selected value=''>Select</option>
				<option  value='Married'>Married</option>
				<option  value='Unmarried'>Unmarried</option>
				</select> 
				
		</td>
    </tr>
	
 <tr>
<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Gender<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="gender" id="gender">
        <option selected value=''>Select</option>
		<option  value='MALE'>MALE </option>
		<option  value='FEMALE'>FEMALE</option>
        </select> 
		
		</td></tr>
		<tr>					

        <td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp CATEGORY<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="opt_cat" id="gender">
        <option selected value=''>Select</option>
		<option  value='GENERAL'>GENERAL </option>
		<option  value='OBC'>OBC</option>
		<option  value='SC'>SC</option>
		<option  value='ST'>ST</option>
		
        </select> 
		</td>
			    </td>
   



   

     <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspMother's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent1">

		<input type=text name="mname" id=mname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">

       <br/><font color=#800080>[Please do not use any prefix such as Smt or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Father's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent2">

	<input type=text name=fname id=fname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));'onkeydown="return alphactrl(event)">

      <br/><font color=#800080>[Please do not use any prefix such as Shri or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspNationality</td>

      <td class="tablecontent1">

	<input type=text name="nation" id="txtnationality" value='INDIAN' readonly size=31 maxlength=10>

      </td>

</tr>

		 <tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspReligion <font color=red> *</font></td>

      <td class="tablecontent2">

		<select width=30 size=1 name=religion   class="listMenu">

        <option selected value=''>Select

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>

        <option value='1'>Hindu</option>

        <option value='2'>Christian</option>

        <option value='3'>Islam</option>

        <option value='4'>Jain</option>

        <option value='5'>Sikh</option>

        <option value='6'>Buddhist</option>

        <option value='7'>Parsi</option>

        <option value='8'>Other</option>

	</select></td>

    </tr>

   

    <tr>

                <td height="20" colspan="5" align="left"  bgcolor="#F5F5F5" class="tableheader"><strong><br><br>&nbsp;&nbsp;&nbsp;&nbspContact Details </strong>:</td>

                      </tr>



    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Address for Communication<span class="alert"><font color=red>*</font></span> </td>

      <td class="tablecontent2">

    <TEXTAREA Name="address" ROWS=2 COLS=20 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphacharintspecial(event,number4) && alphactrl(event));" onkeydown="return alphactrl(event)" >

	 
</TEXTAREA> <font color=#800080>[Maximum 50 character]
     </td>

	 </tr>

	

 <tr><td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp State<span class="alert"><font color=red>*</font></span></td>

	<td class="tablecontent2">

 <select size=1 name="state" id=txtstate class=listMenu>
 <option value=''>Select State</option>
 <option value='ANDAMAN AND NICOBAR'>ANDAMAN AND NICOBAR</option>
 <option value='ANDHRA PRADESH'>ANDHRA PRADESH</option>
 <option value='ARUNACHAL PRADESH'>ARUNACHAL PRADESH</option>
 <option value='ASSAM'>ASSAM</option>
 <option value='BIHAR'>BIHAR</option>
 <option value='CHANDIGARH'>CHANDIGARH</option>
 <option value='CHATTISGARH'>CHATTISGARH</option>
 <option value='DADRA NAGAR HAVELI'>DADRA NAGAR HAVELI</option>
 <option value='DAMAN DIU'>DAMAN DIU</option>
 <option value='DELHI'>DELHI</option>
 <option value='GOA'>GOA</option>
 <option value='GUJARAT'>GUJARAT</option>
 <option value='HARYANA'>HARYANA</option>
 <option value='HIMACHAL PRADESH'>HIMACHAL PRADESH</option>
 <option value='JAMMU AND KASHMIR'>JAMMU AND KASHMIR</option>
 <option value='JHARKHAND'>JHARKHAND</option>
 <option value='KARNATAKA'>KARNATAKA</option>
 <option value='KERALA'>KERALA</option>
 <option value='LAKSHADWEEP'>LAKSHADWEEP</option>
 <option value='MADHYA PRADESH'>MADHYA PRADESH</option>
 <option value='MAHARASHTRA'>MAHARASHTRA</option>
 <option value='MANIPUR'>MANIPUR</option>
 <option value='MEGHALAYA'>MEGHALAYA</option>
 <option value='MIZORAM'>MIZORAM</option>
 <option value='NAGALAND'>NAGALAND</option>
 <option value='ORISSA'>ORISSA</option>
 <option value='PONDICHERRY'>PONDICHERRY</option>
 <option value='PUNJAB'>PUNJAB</option>
 <option value='RAJASTHAN'>RAJASTHAN</option>
 <option value='SIKKIM'>SIKKIM</option>
 <option value='TAMIL NADU'>TAMIL NADU</option>
 <option value='TRIPURA'>TRIPURA</option>
 <option value='UTTAR PRADESH'>UTTAR PRADESH</option>
 <option value='UTTARAKHAND'>UTTARAKHAND</option>
 <option value='WEST BENGAL'>WEST BENGAL</option>
 </select>

      <font color=black> Pin Code<span class=alert><font color=red>*</font></span>
	  <input name="pincode"onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"  id=txtpin  maxlength=6 size=6 name=pincode />

   </td>
	  </tr> 
   <tr>
      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Email address<span class="alert"><font color=red>*</font></span></td>
       <td class="tablecontent2">
		<input type=text name="email" id=txtemail size=31  maxlength=45 onChange="return ValidateForm007();" onkeypress="return emailctrl(event);" onkeydown="return emailctrl(event);"><font color=#800080>[Maximum 45 character] 

 </td>

     </tr>


<tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspMobile Number <font color=red>*</font></td>

       <td class="tablecontent2">

	<input name="mobile" class="textbox2" id="txtmobile" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" size="25"  maxlength="10" /><font color=#800080>(10 digit)</font>

    </td> </tr>



 </table>
<input type="hidden" name="modtype" id="modtype" value="1"/>


  </center></div><div align=center><center>
  <p>
<input   type="submit" value="Submit" name="submit" />  
  </center></div>
</form>
</body>
</html>

 <?php
include ("config.php");

$query = 'CREATE TABLE pdetails( '.
         
         'sal VARCHAR(5) NOT NULL ,'.
         'fullname VARCHAR(30) NOT NULL, '.
		 
         'age VARCHAR(3) NOT NULL, '.
		 'Mstatus VARCHAR (10)  NOT NULL, '.
		 'gender VARCHAR(2) NOT NULL, '.
		 'opt_cat VARCHAR(15)NOT NULL, '.
         'mname VARCHAR(30) NOT NULL, '.
         'fname VARCHAR(30)NOT NULL,'.
		 'religion VARCHAR(15)NOT NULL,'.
		 'address VARCHAR(200) NOT NULL,'.
		 
		 'state VARCHAR(50) NOT NULL,'.
		 'pincode INT(50) NOT NULL,'.
		 'email VARCHAR(20) NOT NULL,'.
		 'mobile INT(12) NOT NULL)';
            
$result = mysql_query($query);

if(isset($_POST['submit']))
{  
	$sal = $_POST['sal'];
	$fullname = $_POST['fullname'];
	
    $age = $_POST['age'];
	 $Mstatus = $_POST['Mstatus'];
	$gender= $_POST['gender'];
	$opt_cat= $_POST['opt_cat'];
	$mname = $_POST['mname'];
	$fname = $_POST['fname'];
	$religion  = $_POST['religion'];
	$address  = $_POST['address'];
	
    $state  = $_POST['state'];
	$pincode  = $_POST['pincode'];
	$email = $_POST['email'];
	$mobile  = $_POST['mobile'];
	
  if ($sal == "" || $fullname ==""  ||$age ==""  || $Mstatus ==""  || $gender ==""  || $opt_cat ==""  || $mname ==""  ||
  $fname ==""  ||$religion ==""  ||$address ==""  || $state ==""  || $pincode ==""  ||  $email ==""  ||$mobile ==""  )
  
  { 
  echo"<center>";
  echo"<font color=red>";
  echo " Cannot SUBMIT , Check mandatory  fields are empty !";
		echo "<br/>";
		echo"</center>";
		}
	else{
		mysql_query("insert into pdetails
		(sal,fullname,age,Mstatus,gender,opt_cat,mname,fname,religion,address,state,pincode,email,mobile) 
		values
		('$sal','$fullname','$age','$Mstatus','$gender','$opt_cat','$mname','$fname','$religion','$address','$state','$pincode','$email','$mobile')",$conn)
		or die("Error ! refresh the page or relogin .");
		
		echo" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo"<center>";  
		echo "data updated in the database , click on next to proceed  ";
		echo "<br/>";
		echo "<br/>";
	    echo "<a href='edu.php'> NEXT </a>";	
	}
}
?>

