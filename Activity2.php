<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    <label for="num1">Enter the first number:</label>
    <input type="number"  name="num1" required>
    <br>
    <label for="num2">Enter the second number:</label>
    <input type="number"  name="num2" required>
    <br>
    <input type="submit" name="calculate" value="calculate">
</form>

<?php
if(isset($_POST['calculate'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;
    $difference = $num1 - $num2;
    $product = $num1 * $num2;
    $quotient =  $num1 / $num2;

    echo "<h3>Result:</h3>";
    echo "sum: $sum<br>";
    echo "Difference: $difference<br>";
    echo "Product: $product<br>";
    echo "Quotient: $quotient<br>";   
}


?>
</body>
</html>