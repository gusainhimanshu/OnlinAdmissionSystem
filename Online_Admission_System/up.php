<html><form enctype="multipart/form-data" action="ups.php" method="POST"> <br> <br> 
 <body bgcolor="#F0F4F1">
&nbsp;&nbsp;&nbsp;&nbsp; Registration ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="regid">  * given during registration<br><br>  
&nbsp;&nbsp;&nbsp;&nbsp; Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <input type="file" name="photo"><br><br>  
  &nbsp;&nbsp;&nbsp;&nbsp;Digital Sign:&nbsp;&nbsp;&nbsp;&nbsp;   <input type="file" name = "sign"><br> <br> 
&nbsp;&nbsp;&nbsp;&nbsp;Scaned Draft :&nbsp;&nbsp;  <input type="file" name = "draft"><br> <br> 
 &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Upload"> 
 </form>
 <html>
 
 <?php
include 'config.php';

$query = 'CREATE TABLE upload( '.
     
         'regid  VARCHAR(10)  NULL, '.
         'photo VARCHAR(50) NOT NULL, '.
         'sign VARCHAR(30) NOT NULL, '.
         'draft VARCHAR(30)NOT NULL)';

$result = mysql_query($query);

?>