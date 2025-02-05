<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="favicon_dark4.png">
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
    <td>1</td>                                                      <!-- 1 -->                    
    <td>echo '$a = '. $a .'&lt;br&gt; $fl = '. $fl .'&lt;br&gt; $boo = '. $boo .'&lt;br&gt; $str = '. $str</td>
    <td>
      <?php echo 
        '$a = '. $a .
        '<br> $fl = '. $fl .
        '<br> $boo = '. $boo .
        '<br> $str = '. $str 
      ?>
    </td>
  </tr>
  <tr>
    <td>2</td>                                                        <!-- 2 -->
    <td>try {<br> 
        $a + $str;<br>
        } catch (Error $e) {<br>
        echo "Происходит ошибка: " . $e->getMessage();<br><br> 
        https://netgen.io/blog/modern-error-handling-in-php
    </td>
    <td>
      <?php   
        try {
        $a + $str;
        } catch (Error $e) {
        echo "Происходит ошибка: " . $e->getMessage();
        # https://netgen.io/blog/modern-error-handling-in-php
      }?>
    </td>
  </tr>
  <tr>
    <td>3</td>                                                  <!-- 3 -->              
    <td>echo match (true) {<br>
        $a > $str  => "$a больше чем $str",<br>
        $a < $str  => "$a меньше чем $str",<br>
        $a == $str => "$a рввно $str (не строгое сравнение)",<br>
        $a === $str => "$a равно $str (строгое сравнение)",<br>
        default => "Нельзя сравнить"
    </td>
    <td>
      <?php
        echo match (true) {
        $a > $str  => "$a больше чем $str",
        $a < $str  => "$a меньше чем $str",
        $a == $str => "$a рввно $str (не строгое сравнение)",
        $a === $str => "$a равно $str (строгое сравнение)",
        default => "Нельзя сравнить"
      }?>
    </td>
  </tr>
  <tr>
    <td>4</td>                                                  <!-- 4 -->             
    <td>echo match (true) {<br>
        $nol == $pusto => "$nol рввно $pusto (не строгое сравнение)",<br>
        $nol === $pusto => "$nol равно $pusto (строгое сравнение)",<br>
        default => "Нельзя сравнить"
    </td>
    <td>
      <?php
        echo match (true) {
        $nol == $pusto => "$nol рввно $pusto (не строгое сравнение)",
        $nol === $pusto => "$nol равно $pusto (строгое сравнение)",
        default => "Нельзя сравнить"
      }?>
    </td>
  </tr>
  <tr>
    <td>5</td>                                                  <!-- 5 -->             
    <td>echo $s1 . '&lt;br&gt;' . $s2;</td>
    <td>
      <?php
        echo $s1 . '<br>' . $s2;
      ?>
    </td>
  </tr>
  <tr>
    <td>6</td>                                                  <!-- 6 -->             
    <td>echo '&lt;br&gt;$mas["one"] = ' . $mas["one"] . '&lt;br&gt;$mas[2] = ' . $mas[2] . '&lt;br&gt;$mas[3] = ' . $mas[3];</td>
    <td>
      <?php
        echo '<br>$mas["one"] = ' . $mas["one"] . '<br>$mas[2] = ' . $mas[2] . '<br>$mas[3] = ' . $mas[3];
      ?>
    </td>
  </tr>
  <tr>
    <td>7</td>                                                  <!-- 7 -->             
    <td>echo var_dump($mas);</td>
    <td>
      <?php
        echo var_dump($mas);
      ?>
    </td>
  </tr>
  <tr>
    <td>8</td>                                                  <!-- 8 -->             
    <td>echo '&lt;br&gt;' . $new = (string)$mas;</td>
    <td>
      <?php
        echo '<br>' . $new = (string)$mas;
      ?>
    </td>
  </tr>
  <tr>
    <td>9</td>                                                  <!-- 9 -->             
    <td>$name = "a"; echo ${$name};</td>
    <td>
      <?php
        $name = "a";
        echo ${$name};
      ?>
    </td>
  </tr>
  <tr>
    <td>10</td>                                                  <!-- 9 -->             
    <td>$ref=&$a; $ref=10; echo $a;</td>
    <td>
      <?php
         $ref=&$a;
         $ref=10;
         echo $a;
      ?>
    </td>
  </tr>
  <tr>
    <td>11</td>                                                  <!-- 9 -->             
    <td>echo HOST;</td>
    <td>
      <?php
         echo HOST;
      ?>
    </td>
  </tr>
  <tr>
    <td>12</td>                                                  <!-- 9 -->             
    <td>echo $str.$nol + 1 . '&lt;br&gt;'; <br> echo gettype($str) . $nol . 1;</td>
    <td>
      <?php
         echo $str.$nol + 1 . '<br>';
         echo gettype($str) . $nol . 1;

      ?>
    </td>
  </tr>






</table>


    
</body>
</html>
