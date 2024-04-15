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

 


?>
</body>
</html>