<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$password= $_POST['password'];
	
     $confirmpassword =$_POST['confirmpassword'];
	 
	 	
if ($confirmpassword === $password){
	 echo "<script>alert('Passwords confirmed.');</script>"; 
}else {
	echo "<script>alert('password do not match');</script>";
}
}
?>

<?php




if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$password= $_POST['password'];
	
	$email =$_POST['email'];
	$mail =$_POST['mail'];
	
	
	if ($email == $mail){
		echo "<script>alert('email corresponds  )</script";
	}
	else{
		echo "<script>alert('email do not match');</script>";
	}
}
?>
<form>
  email : <input type="text" name="mail"> <br> 
  email : <input type="text" name="email"> <br>
  Password: <input type="text" name="password" required>
  
  </form>
  <?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: echo.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>
    <p>You are now logged in.</p>
</body>
</html>