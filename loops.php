<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    $a = 5;

    for ($i = 1; $i <= $a; $i++) {
        echo $i . "<br>";
    }

    $boolean = true;
    while ($boolean) {
        echo "This will run once<br>";
        $boolean = false;
    }

    $b = 5;
    while ($b > 0) {
        echo "This will run " . "$b" . " times<br>";
        $b--;
    }

    while ($b > 10) {
        echo "This will not run<br>";
    }

    do {    // "do while" will run at least once
        echo "This will run once<br>";
    } while ($b > 10);

    $fruits = array("Apple", "Banana", "Orange");

    // "foreach" is used to loop through arrays
    foreach ($fruits as $fruit) { 
        echo $fruit . "<br>"; // Apple, Banana, Orange
    }

    $foods = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    foreach ($foods as $color) { 
        echo $color . "<br>"; // Red, Yellow, Orange
    }

    foreach ($foods as $fruit => $color) { 
        echo $fruit . " is ". $color . "<br>"; // Apple is Red, Banana is Yellow, Orange is Orange
    }
?>
</body>
</html>