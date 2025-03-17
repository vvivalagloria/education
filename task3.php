<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Calibri, sans-serif;
      font-size: 40px;
    }
  </style>
  <title>Task3</title>
</head>
<body>
<?php
    $getSum = function($a, $b) {
        echo "$a + $b = " . $a + $b . "<br>";
    };

    $getSum(10, 15); 

    $array = [1, 2, 3, 4];
    
    $callback = function(array $arr, $function) {
        if(count($arr) % 2 !== 0 || is_callable($function) == false) {
            echo "Массив нечетный или не передана функция<br>";
            return;
        }

        for($i = 0; $i < count($arr); $i += 2) {
            $function($arr[$i], $arr[$i + 1]);
        };
    };

    echo "<br>";

    $callback($array, $array);

    echo "<br>";

    $callback($array, $getSum);

    //type callable - https://www.php.net/manual/en/language.types.php

?>
</body>
</html>
