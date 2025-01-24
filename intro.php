<?php

echo "Another week end"
echo "hellow world";
echo "<h2>Hello this is an heading </h2>";
 ?>
<form>
<label for="email"><b>Email</b></label>

    <input type="email" placeholder="email" name="mail"  required>

    <label ><b>Username</b></label>

    <input type="text" placeholder="username" name="username"  required>

    <hr>

	<input type="submit">

</form>

 



<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $email = $_POST['email'];
  $fname  = $_POST['fname'];
  $lname =$_post['lname'];
  $phone = $_post['phone'];
  
echo "Welcome".' '.$fname;
echo "<br>";
	echo "Your email is ".' '.$email;

echo"<br>";
     echo"your phone is ".' '.$phone; 
echo"<br>";
};

?>
<form method="post">
      <label for="fname">First name:</label><br>
         <input type="text" id="fname" name="fname"><br>
     <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br>
		<label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

      <label for="psw"><b>password</b></label><br>
	     <input type="password" placeholder="Enter Password" name="password" id="password" required>
	 
<br>	
      <label > PHONE NUMBER </label>
	  <input type="phone" name="phone">
	  <br>
	  <input type="submit">
</form>	 
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
};
echo 5 + 5;

echo"<br>";

echo 5 * 6;

echo"<br>";

echo 12/3;


?>
	 
			<form method="post">	 
				<label for="number"> firstnumber  </label>
					<input type="number" name=" number">
  
				
				<label> Second number </label>
				<input type="number" name="calulator">
  <br>
				<input type="submit">  
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <!---note:get:means collect infromation
	 post:collect info from the data base 
	 ,or personal info
	 $-variable
	 also, all use correct;
	 ----!>