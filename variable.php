<?php  

echo "hello world";
echo "<h2> Hello this is an heading </h2>";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
	$email = $_POST['email'];
	$username = $_POST['username'];
	
	echo "Welcome".' '.$username;
	echo "<br>";
	echo "Your email is ".' '.$email;
};

echo"<br>";
echo"<br>";

echo 5 + 5;
echo"<br>";
echo 5 * 6;
echo"<br>";
echo 12/3;

echo"<br>";
echo"<br>";
$num1 =  530;
$num2 = 200;
$result = $num1 + $num2;
echo $result;

 // rules that guides naming variables
 // right methods of naming variables
 //camelCase - firstName;
 $firstName = "Isreal";
 // PascalCase - LastName
 $LastName = "Isreal";
 // snake_case - user_name
 $user_name = "Joy";
 // wrong methods of naming variables
 // msut not start with numbers - 9ice
 // must not have whitespacing between variable names
 // user pass - wrong name because there is whitespacing betweeen user and pass
 // company-name --- wrong only underscore is allowed between words
 
 echo"<br>";
 $data = "apple";
 var_dump($data);
  echo"<br>";
$data1 = 50;
var_dump($data1);

 echo"<br>";

// boolean datatype
// True and False 
var_dump(5 == 5);
 echo"<br>";
 var_dump(6 > 10);
 
  echo"<br>";
  // comparison operators
  // = - for assigning
  // ==  - for comparison
  // === - for comparion considering the data type also
  

echo"<br>";
echo"<br>";
echo"<br>";
 ?>
 
 
 
 <form method="POST" action>
<label for="email"><b>Email</b></label>
    <input type="email" placeholder="email" name="email"  required>

  

    <label ><b>Username</b></label>
    <input type="text" placeholder="username" name="username"  required>
    <hr>
	<input type="submit">
</form>