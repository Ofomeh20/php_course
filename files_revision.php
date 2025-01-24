
<!--NOTE:Creating a form with datatype, array, html,css ,javascript and variable--->



<?php
 //$filename="example.txt";
 //$file=fopen($filename,mode:"w");
 
 //fwrite($file,data:"Hello World\n");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$email = $_POST['email'];
	
     $fname =$_POST['fname'];
	 	
	$lname =$_POST['lname'];
	
	$birth=$_POST['birth'];
	
  $email =$_POST['email'];
  
  $state =$_POST['state'];
 
  $phone=$_POST['phone'];
 
  $password =$_POST['password'];
 
  $confirmpassword =$_POST['confirmpassword'];

   // linking the file paths 
   $filename="example.txt";
   $file=fopen($filename,mode:"w");
   
   fwrite ($file,data:"$fname\n"); 
   
   fwrite ($file,data:"$lname\n");
 
   fwrite ($file,data:"$birth\n");
   
   fwrite ($file,data:"$email\n");
   
   fwrite ($file,data:"$state\n");
   
   fwrite ($file,data:"$phone\n");
   
   fwrite ($file,data:"$password\n");
   
   fwrite ($file,data:"$confirmpassword\n");
  
   
}
?>

<?php

  ?>  
  <form name="myForm" action="echo.php" onsubmit="return validateForm()" method="POST" required>
  
    <h1> SCHOOL REGISTRATION FORM </h1>
  First-Name: <input type="text" name="fname" ><br>
  Last-Name: <input type="text" name ="lname"> <br>
  Date of Birth: <input type="number" name="birth"> <br>  
  State of Orgin: <input type=" text"  name="state"> <br >
  E-mail:<input type="text" name="email" required><br>
  Phone Number: <input type="number" name="phone"> <br>
  Password:<input type="text" name="password" required><br>
  Confirm-Password:<input type="text" name="confirmpassword" required><br>
    <input type="submit" value="sign up">
  <input type="submit" value="Login"> <br>
  <input type="submit" value="Submit">
  
  
  </form>
      
	 