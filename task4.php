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
  <title>Task4</title>
</head>
<body>
<?php
    $getAverage = function($a, $b) {
        echo "($a + $b) / 2 = " . ($a + $b) / 2 . "<br>";
    };

    $getNestedArrayAverage = function(array $arr, $function) {
        if(is_callable($function) == false) {
            echo "Не передана функция<br>";
            return;
        }

        for($i = 0; $i < count($arr); $i++) {
            if(is_array($arr[$i])) {
                $function($arr[$i][0], $arr[$i][1]);
            }
        };
    };

    $array = [
        [1, 2],
        [3, 4],
        [5, 6],
        [7, 8]
    ];

    $getNestedArrayAverage($array, $getAverage);
?>
</body>
</html>
