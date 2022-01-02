<?php
 $con=mysqli_connect("localhost","root","","MUUSIC"); 
 if (mysqli_connect_errno()) 
 { 
 echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
  } 
 
$sql="INSERT INTO signup (user_name,email,pass_word,country,gender,mobile_no,profile_pic) 
VALUES ('$_POST[Name]','$_POST[email]','$_POST[password]','$_POST[Country]','$_POST[Gender]','$_POST[Phoneno]','$_POST[profileurl]')";  
 
if (!mysqli_query($con,$sql))  
 {   die('Error: ' . mysqli_error());   } 
 echo "Hello ".$_POST[Name]." Welcome to MUUSIC"; 
 
mysqli_close($con);
 ?>  