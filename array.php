
<?php

// boolean - True and False
 $fruit = "mango";
$fruit1 ="pineapples";
$fruit2 = "banana";
 // array - collection datatype
 // types of arrray in php - simple, assocaitive , multi-dimensional

echo "<br>";
$fruits = ["mango","banana","orange","apple","guava","water melon","pawpaw"];    

var_dump($fruits);
echo "<br>";
echo $fruits[3];
echo "<br>";
var_dump($fruits[3]);
echo "<br>";
echo $fruits[5];
echo "<br>";
$city = array("Ibadan","Paris","Rome");
var_dump($city);

$employee = ["name"=>"gabriel","position"=> "web developer","age"=>23];
echo "<br>";
echo $employee["name"];
echo "<br>";
echo $employee["position"];

// multi-dimensional array
$cars = [["Tesla", "model x"],["Lamborgini","urus"],["mercedes","GlE"]];
echo "<br>";
echo $cars[1][0];

$location = ["countries"=> ["nigeria","ghana","togo","benin"],"capital"=> ["abuja","accra","lome","daome"],
"mineral resources"=>["crude oil","crude oil","rubber","limestone"]];
echo "<br>";
echo $location["countries"][0];
echo"      " ;  
echo $location["capital"][0];
echo"      ";
echo $location["mineral resources"][0];
echo "<br>";
echo $location["countries"][1];
echo"      ";
echo $location["capital"][1];
echo"      ";
echo $location["mineral resources"][1];
?>
