<?php

// user defined function
function Add($x, $y){
  $sum = $x + $y;
  return $sum;

}
function Sub($a, $b){
    $diff = $a - $b;
    return $diff;

}
function Mul($f, $g){
    $prod = $f * $g;
    return $prod;
}
function Div($c, $d){
    $quo = $c / $d;
    return $quo;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for=""></label>
    <br> 
    <input type="number" name="n1" id="">
    <label for=""></label>
    <input type="number" name="n2" id="">
    <br>
    <input type="submit" name="btn">
    </form>
<?php
if(isset($_POST['btn'])){

$number1 = $_POST['n1'];
$number2 = $_POST['n2'];

$result1=Add($number1, $number2);

$result2=Sub($number1, $number2);

$result3=Mul($number1, $number2);

$result4=Div($number1, $number2);

echo "<h2>The sum of $number1 and $number2 is $result1</h2><br>";

echo "<h2>The difference of $number1 and $number2 is $result2</h2><br>";

echo "<h2>The product of $number1 and $number2 is $result3</h2><br>";

echo "<h2>The quotient of $number1 and $number2 is $result4</h2><br>";
}






?>




</body>
</html>