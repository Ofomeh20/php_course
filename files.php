<?php
//in this php you would learn how to link files..
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$email = $_POST['email'];
	
	$name  = $_Post['name'];
	
	$password=$_POST['password'];
	
	$confirmpassword =$_POST['confirmpassword'];
	
	$filename="formregristation.txt";
	$file=fopen($filename,mode:'w');
	fwriet ($file,data:username);
}
if("$password !== $confirmpassword"){
echo"<script>alert('Passwords do not match. Please confirm your password.');</script>";
}else{echo "<script>alert('Passwords match!');</script>"; }

//$filename = "example.txt";
//$file = fopen($filename,mode:"w");

//fwrite($file,data:"Hello World\n");
//fwrite($file,data:"Hello! Welcome")
//$filename = "example.txt";
//$file = fopen($filename,mode:"a");

//fwrite($file,data:"\n appended sentence");
//when you write this and the code will be added to your code
//fwrite($file,data:"\n a")
//$filename = "example.txt";
//$file = fopen($filename,mode:"a");

//fwrite($file,data:"another sentence");
//$file = fopen($filename,mode:"w");

//fwrite($file,data:"another sentence");
//when you write this you delete the sentence that was untop of it , the code will be over written
?>
<!DOCTYPE html>
<html>
<body>


<form name="myForm" action="welcome.php" onsubmit="return validateForm()" method="POST" required>
 Full-Name: <input type="text" name="name"><br>
  
  E-mail:<input type="text" name="email" required><br>
  Password:<input type="text" name="password" required><br>
  Confirm-Password:<input type="text" name="confirmpassword" required><br>
  
  <input type="submit" value="Submit">
</form>
</html>
</body>