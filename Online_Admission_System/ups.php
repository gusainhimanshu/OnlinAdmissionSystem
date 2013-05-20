<html>
<head>
<body bgcolor="#F0F4F1">
<head>
</html>
  <?php 

 //This is the directory where images will be saved 
 $target = "images/"; 
 $target = $target . basename( $_FILES['photo']['name']); 
 $photo= 0;
 $sig=0;
  $draf=0;
 //This gets all the other information from the form 

// $code=mt_rand();
  $regid = $_POST['regid'];
 $pic=($_FILES['photo']['name']); 
 $sign=($_FILES['sign']['name']);
 $draft=($_FILES['draft']['name']); 
 // Connects to your Database 
 mysql_connect("localhost","root","") or die(mysql_error()) ; 
 mysql_select_db("mdb") or die(mysql_error()) ; 

 //Writes the information to the database 
 mysql_query("INSERT INTO `upload` VALUES ('$regid','$pic','$sign','$draft')") ; 
 
 //Writes the photo to the server 
 if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
 
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded successfully"; 
 echo"<br>";
 $photo=1;
 }  
 else { 

 //Gives and error if its not 
 echo "Sorry, there was a problem uploading the PHOTO file."; 
 echo"<br>";
 } 
 if(move_uploaded_file($_FILES['sign']['tmp_name'], $target))
 { 
 $sig=1;
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['sign']['name']). " has been uploaded succesfully"; 
 echo"<br>";
 }  else { 

 //Gives and error if its not 
 echo "Sorry, there was a problem uploading the scanned digital signature  file."; 
 echo"<br>";
 } 
  if(move_uploaded_file($_FILES['draft']['tmp_name'], $target))
 { 
  $draf=1;
 //Tells you if its all ok 
 echo "The file ". basename( $_FILES['draft']['name']). " has been uploaded succesfully"; 
 echo"<br>";
 } 
 else { 

 //Gives and error if its not 
 echo "Sorry, there was a problem uploading the scanned Draft file."; 
 echo"<br>";
 } 
 if ($photo==1 && $sig==1 && $draf==1 ){
 echo"DATA Uploaded check the profile page for further info and reference ";
 echo"&nbsp;&nbsp;";
 echo"<a href= 'statusreg.php'>to check profile and status </a>";
 }
  else {
  Echo"<br>";
  echo " must upload file for application to be submited ";
  }
  
  
   $sql="UPDATE login SET submission='1' WHERE (regId = $regid)";

       if (!mysql_query($sql))

  {

        die('Error: ' . mysql_error());

  }
  
  

 ?> 