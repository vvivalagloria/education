<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $name = "John";
    $name = "Sam"; // This will overwrite the previous value of $name
    echo $name . "<br>";

    define("PI", 3.14); // This is a constant, cannot be changed - constant are usually in uppercase
    echo PI . "<br>";

    // Constants are global, better define them in the begining

 ?>
</body>
</html>