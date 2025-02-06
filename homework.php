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
    table {
    width: 100%;
    border-collapse: collapse;
    }
    th, td {
    border: 5px solid black;
    padding: 12px;
    }
  </style>
  <title>Homework</title>
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

//echo $a, "\n";

?>

<table>
  <tr>
    <td><b>Task number</b></td>
    <td><b>Solution</b></td>
    <td><b>Result</b></td>
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
        echo "Происходит ошибка: " . $e->getMessage();}<br><br> 
       # https://netgen.io/blog/modern-error-handling-in-php
    </td>
    <td>
      <?php   
        try {
        $a + $str;
        } catch (Error $e) {
        echo "Происходит ошибка: " . $e->getMessage();}      
        # https://netgen.io/blog/modern-error-handling-in-php
      ?>
    </td>
  </tr>
  <tr>
    <td>3</td>                                                  <!-- 3 -->              
    <td>echo match (true) {<br>
        $a > $str  => "$a больше чем $str",<br>
        $a < $str  => "$a меньше чем $str",<br>
        $a == $str => "$a рaвно $str (не строгое сравнение)",<br>
        $a === $str => "$a равно $str (строгое сравнение)",<br>
        default => "Нельзя сравнить"}
    </td>
    <td>
      <?php
        echo match (true) {
        $a > $str => "$a больше чем $str",
        $a < $str => "$a меньше чем $str",
        $a == $str => "$a рaвно $str (не строгое сравнение)",
        $a === $str => "$a равно $str (строгое сравнение)",
        default => "Нельзя сравнить}"}
      ?>
    </td>
  </tr>
  <tr>
    <td>4</td>                                                  <!-- 4 -->             
    <td>echo match (true) {<br>
        $nol == $pusto => "$nol рввно $pusto (не строгое сравнение)",<br>
        $nol === $pusto => "$nol равно $pusto (строгое сравнение)",<br>
        default => "Нельзя сравнить"}
    </td>
    <td>
      <?php
        echo match (true) {
        $nol == $pusto => "$nol рввно $pusto (не строгое сравнение)",
        $nol === $pusto => "$nol равно $pusto (строгое сравнение)",
        default => "Нельзя сравнить"}
      ?>
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
    <td>10</td>                                                  <!-- 10 -->             
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
    <td>11</td>                                                  <!-- 11 -->             
    <td>echo HOST;</td>
    <td>
      <?php
         echo HOST;
      ?>
    </td>
  </tr>
  <tr>
    <td>12</td>                                                  <!-- 12 -->             
    <td>echo $str.$nol + 1 . '&lt;br&gt;'; <br> echo gettype($str) . $nol . 1;</td>
    <td>
      <?php
         echo $str.$nol + 1 . '<br>';
         echo gettype($str) . $nol . 1;
      ?>
    </td>
  </tr>
  <tr>
  <tr>
    <td>13</td>                                                  <!-- 13 -->             
    <td>      &lt;?php $colours = array(<br>"каждый" => "red",<br>
     "охотник" => "orange",<br>
      "желает" => "yellow",<br>
       "знать" => "green",<br>
       "где" => "lightblue",<br>
       "сидит" => "blue",<br>
       "фазан" => "purple");<br> 
      
      asort($colours);?><br>
       &lt;table> <br>
       &lt;tr> <br>
        &lt;?php foreach <br>
        ($colours as $key => $value) { <br>
            echo "&lt;td>$key&lt;/td>"; <br>
          } ?> <br>
          &lt;/tr> <br>
          &lt;tr> <br>
        &lt;?php foreach <br>
        ($colours as $key => $value) { ?> <br>
            &lt;td style="background-color: &lt;?php echo $value; ?>;">&lt;?php echo $value;}?>&lt;/td><br>
          &lt;/tr><br>
          &lt;/table><br>
    <td>
      <?php $colours = array(
      "каждый" => "red", 
      "охотник" => "orange", 
      "желает" => "yellow", 
      "знать" => "green", 
      "где" => "lightblue", 
      "сидит" => "blue", 
      "фазан" => "purple");   
      asort($colours);
      ?>
      <table>
        <tr>
          <?php 
          foreach ($colours as $key => $value) {
            echo "<td>$key</td>";
          } ?>
        </tr>
        <tr>
          <?php 
          foreach ($colours as $key => $value) { ?>
          <td style="background-color: <?php echo $value; ?>;"><?php echo $value;}?></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>14</td>                                                  <!-- 14 -->             
    <td>
    &lt;?php function f_color(int $a = 0) { <br>
           $result = $a % 2 == 0 ? <br>
           "&lt;p style='color:green;'>Четное число&lt;/p>" : <br>
           "&lt;p style='color:red;'>Нечетное число&lt;/p>"; <br>
           echo $result; }?> <br><br>
           &lt;td>&lt;?php f_color(4)."&lt;br>".f_color(5) ?>&lt;/td>  
    </td>
    <?php function f_color(int $a = 0) {
           $result = $a % 2 == 0 ? "<p style='color:green;'>Четное число</p>" : "<p style='color:red;'>Нечетное число</p>";
           echo $result; }?>
    <td><?php f_color(4)."<br>".f_color(5) ?></td>       
  </tr>
</table>    
</body>
</html>
