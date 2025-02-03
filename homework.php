<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<?php

/* Описание скалярных переменных */

$a = 15; # целое 
$fl = 3.14; # с плавающей точкой
$boo = TRUE; # boolean
$str = "stroka"; # строка
$nol = 0;
$pusto = "";

$s1 = "Переменная a = $a \n"; # разбираемая строка
$s2 = 'Переменная a = $a \n'; # неразбираемая строка

/* Описание массива */

$mas = array( "one" => TRUE,
 1 => -20,
 "three" => 3.14);
$mas[]="two";
$mas["four"]=4;

/* Описание константы */

define("HOST", "moodle.eek.ee");

/* Вывод значения переменной на экран */

###

//echo $a, "\n";
?>



<table>
  <tr>
    <td>Task number</td>
    <td>Solution</td>
    <td>Result</td>
  </tr>
  <tr>
    <td>1</td>
    <td>echo $a .', '. $fl .', '. $boo .', '. $str ?></td>
    <td><?php echo $a .', '. $fl .', '. $boo .', '. $str ?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>echo $a . $str</td>
    <td><?php echo $result = $a . $str ?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>echo $a > $str, $a < $str, $a == $str, $a === $str</td>
    <td><?php echo $a > $str, $a < $str, $a == $str, $a === $str?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>echo $a > $str, $a < $str, $a == $str, $a === $str</td>
    <td><?php echo $nol ==$pusto, $nol === $pusto, $s1 . '<br>' . $s2?></td>
  </tr>
</table>
    
</body>
</html>

#