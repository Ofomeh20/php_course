
<?php 
session_start(

);
if($_SERVER['REQUEST_METHOD'] === 'POST'){

	$email = $_POST['email'];

	$username = $_POST['name'];

	$password = $_POST['password'];

	$confirmpassword = $_POST['confirmpassword'];



	echo "Welcome".' '.$name;

	echo "<br>";

	echo "Your email is ".' '.$email;

	echo "<br>";

$confirmpassword  === $password;

if($confirmpassword !== $password ){

	echo "password doesn't match";

}else{

	echo "log in successful";

}



}
?>

<?php 
  $password !== '$confirmPassword' ;
 // You can change this to test different values if ($password !== $confirmPassword) 
 if ('$password == $confirmpassword')
 { echo "<script>alert('Passwords do not match. Please confirm your password.');</script>"; } 

 elseif ('$password != $confirmpassword');
 { echo "<script>alert('Passwords match!');</script>"; }
 ?>
</script>


</body>
</html>