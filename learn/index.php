<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning</title>
</head>
<body>

<?php
echo "My first PHP script!";
$variableColor = "greed";
echo "text is" . $variableColor;
$numberOne = 1;
$numberTwo = 2;
echo $numberOne + $numberTwo;
$x = 5;
var_dump($x);  //The var_dump() function returns the data type and the value
$x = $y = $z = "PHP";

//takyto zapis mi dava error pretoze premenna je definovana mimo funkcie:
/* $x = 5;

function Test() {
  echo "<p>Variable x inside function is: $x</p>";
}
Test();
 */



$x = 5;
$y = 10;

function myTest() {
  global $x, $y;   //cez global pristupujem ku vsetkym premennym inak by to davalo error
  $y = $x + $y;
}

echo strlen("Hello world!"); // The PHP strlen() function returns the length of a string.

//The PHP str_word_count() function counts the number of words in a string.

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

$y = (string) $a; //menime typ premennej v ktorej je int na string

echo(rand(10, 100));  //random cislo
 
if (5 > 3) {
  echo "Have a good day!";
}

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break; //break - dolezite
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

function myMessage() {
  echo "Hello world!";
}

myMessage();

//polia
$cars = array("Volvo", "BMW", "Toyota");
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";











 


?>
</body>
</html>