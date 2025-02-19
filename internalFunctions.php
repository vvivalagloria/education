<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    // String functions

    $string = "Hello, World!";
    echo strlen($string) . "<br>"; // 13
    echo strpos($string, "o") . "<br>"; // 4
    echo str_replace("World", "Name", $string) . "<br>"; // Hello, Name!
    echo strtolower($string) . "<br>"; // hello, world!
    echo strtoupper($string) . "<br>"; // HELLO, WORLD!
    echo substr($string, 2, -2) . "<br>"; // llo, Worl
    print_r (explode(" ", $string)); //Array ( [0] => Hello, [1] => World! )
    echo "<br>";

    // Math functions

    $number = -5.5;
    echo abs($number) . "<br>"; // 5.5
    echo round($number) . "<br>"; // -6
    echo pow(2, 3) . "<br>"; // 8
    echo sqrt(16) . "<br>"; // 4
    echo rand(1, 10) . "<br>"; // random number between 1 and 10

    // Array functions

    $array = ["apple", "banana", "orange"];

    echo count($array) . "<br>"; // 3
    echo is_array($array) . "<br>"; // 1
    array_push($array, "kiwi"); 
    print_r($array) . "<br>"; // Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )

    echo "<br>";

    array_pop($array); // kiwi
    print_r(array_reverse($array)) . "<br>";

    echo "<br>";

    $array2 = ["kiwi"];
    print_r(array_merge($array, $array2)) . "<br>"; // Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi [4] => kiwi )

    echo "<br>";

    // Date functions

    echo date("d/m/Y H:i:s" ). "<br>"; // 11/02/2025 13:45:04
    echo date("d/m/y h:i:s" ). "<br>"; // 11/02/25 01:45:04
    echo date("D/m/y H:I:s" ). "<br>"; // Tue/02/25 13:0:51
    echo date("d/M/y H:i:S" ). "<br>"; // 11/Feb/25 13:46:th

    echo time() . "<br>"; // 1739277988 seconds since 01/01/1970 - Unix timestamp

    $date = "2025-02-11 13:50:00";
    echo strtotime($date) . "<br>"; // 1739278200 - Unix timestamp of the date
?>

</body>
</html>