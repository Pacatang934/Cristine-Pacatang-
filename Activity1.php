<!DOCTYPE html>
<html>
<head>
    <title>Days of the Week</title>
</head>
<body>

<h2>Click a Button to Display the Day</h2>

<form method="post">
    <input type="submit" name="day" value="Monday">
    <input type="submit" name="day" value="Tuesday">
    <input type="submit" name="day" value="Wednesday">
    <input type="submit" name="day" value="Thursday">
    <input type="submit" name="day" value="Friday">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the value of the button clicked
    $day = $_POST['day'];

    // Display the respective day
    echo "<h3>You clicked: " . $day . "</h3>";
}
?>


</body>
</html>