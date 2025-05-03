<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вариант 2 - 3 задание</title>
</head>
<body>
<?php

$start = 111111;
$end = 123321;

echo "Input $start $end Output ";

$array = range($start, $end);

foreach ($array as $number) {
    
    $firstHalf = substr($number, 3);
    $secondHalf = substr($number, 0, 3);

    $sum1 = array_sum(str_split($firstHalf));
    $sum2 = array_sum(str_split($secondHalf));

    if ($sum1 === 6 && $sum2 === 6) {
        echo "$number, ";
    }

    // https://www.php.net/manual/en/function.range.php - создание массива с числами в заданном диапазоне
    // https://www.php.net/manual/en/function.str-split.php - конвертация строки в массив
}

?>
</body>
</html>
