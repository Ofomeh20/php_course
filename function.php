<?php
function myMessage() {
  echo "Hello world!";
  
  
}
myMessage();

// function arguments 
//one name

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function school($college){
	echo "$college monst.<br>";
		
}
school("hopewell");
school("well");
school("hope");

// function argument , 2 arhguments 
function Name($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

Name("Hege", "1975");
Name("Stale", "1978");
Name("Kai Jim", "1983");

//function default value 
function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function maxheight($minheight=10){
	echo "The maximum height is : $minheight <br>";
	}
	maxHeight(350);
maxHeight(); // will use the default value of 10
maxHeight(135);
?>

	<?php
	// funtion 	return 
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

<?php
//note $ are case sensitive 
function sub($y,$z){
	$x = $y - $z ;
	return $x;
	
}
echo "10-5 =".sub(5,10)."<br>";
 echo "15-5 =".sub(15,5)."<br>";
 echo "13-5 =".sub(13,5)."<br>";
 
?>
<?php
//passing argument by refrence 
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;

echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
function cmToMm($centimeters) {
    // 1 centimeter is equal to 10 millimeters
    return $centimeters * 10;
}

// Example usage:
$centimeters = 5;
$millimeters = cmToMm($centimeters);
echo "$centimeters cm is equal to $millimeters mm.";
echo "<br>";
?>


<?php
function minutesToSeconds($minutes) {
    // Ensure the input is a number
    if (!is_numeric($minutes)) {
        return "Invalid input. Please enter a numeric value.";
    }
    
    // Convert minutes to seconds
    $seconds = $minutes * 60;
    return $seconds;
}

// Example usage
$minutes = 5;
echo minutesToSeconds($minutes); // Output: 300
?>
















<!---- to create a function 
call the function 
Eg ; function myMessage() {
  echo "Hello world!";
}
---->