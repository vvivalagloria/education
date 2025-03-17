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
  <title>Task2</title>
</head>
<body>
<?php
    $arr_string = ["one", "two", "three"];

    $arr_numbersInt = [1, 2, 3];
    $arr_numbersDiff = [1, 8.6, -3, -5.516];
    
    $arr_numString = ["one", 2, 3];

    $fakeArray = "";

    $complicatedArray = [
        [5,[115,112], 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $emptyArray = [];

    getArraySum($arr_string);
    getArraySum($arr_numbersInt);
    getArraySum($arr_numbersDiff);
    getArraySum($arr_numString);
    getArraySum($fakeArray);
    getArraySum($emptyArray);
    getArraySum($complicatedArray);

?>
</body>
</html>

<?php
function getArraySum($arr) {
    if (!is_array($arr) || empty($arr)) {
        echo "Ваш ввод не массив или пустой массив!<br>";
        return;
    }
    
    foreach ($arr as $value) {
        if (is_array($value)) {
            foreach ($value as $val) {
                if (!is_numeric($val)) {
                    echo "Значения должны быть циферными!<br>";
                    return;
                }
            }
        } else {
            if (!is_numeric($value)) {
            echo "Значения должны быть циферными!<br>";
            return;
        }
    }
}
    $sum = 0;
    foreach ($arr as $value) {
        if(is_array($value)) {
            foreach ($value as $val) {
                $sum += $val;
            }
        } else {
        $sum += $value;
    }
}
    echo $sum . '<br>';
}
?>