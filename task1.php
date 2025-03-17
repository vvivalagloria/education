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
  <title>Task1</title>
</head>
<body>
<table>
    <?php
    getRowTable ("1","2","25");
    getRowTable ("Ivanov","Ivan","25");
    getRowTable ("Ivanov","Ivan","25","");
    getRowTable ("Ivanov","Ivan","ivanov@hot.ee" );
    getRowTable ("Ivanov","Ivan","25", "ivanov@gmail.com" );
    getRowTable ("Petrov","Petr", "35", "petr.petrov@mail.ee" , "+37256112233");
    ?>
  </table>
    <br>
    <br>
  <table>
    <?php
    $arr_images = [
        ['src' => '1.jpg', 'desc' => 'Сметана1'],
        ['src' => '2.jpg', 'desc' => 'Сметана2'],
        ['src' => '3.jpg', 'desc' => 'Сметана3'],
        ['src' => '4.jpg', 'desc' => 'Сметана4'],
        ['src' => '5.jpg', 'desc' => 'Сметана5'],
        ['src' => '6.jpg', 'desc' => 'Сметана6'],
        ['src' => '7.jpg', 'desc' => 'Сметана7'],
        ['src' => '8.jpg', 'desc' => 'Сметана8'],
        ['src' => '9.jpg', 'desc' => 'Сметана9']
       ];
       getRowTable ($arr_images);
    ?>
  </table>
</body>
</html>

<?php

function getRowTable() {

    if (func_num_args() == 0) {
        echo "Необходимы параметры!<br>";       
        return;
    }

    $result = "<tr>";

    if(is_array(func_get_arg(0))) {
        foreach (func_get_arg(0) as $key => $value) {
            $result .= '<td><img src="photos/' . $value['src'] . '"></td>';
            $result .= '<td>' . $value['desc'] . '</td>';
            $result .= "</tr>";
        }
    }
    else 
    {
        for ($i = 0; $i < func_num_args(); $i++) {
            $result .= "<td>" . func_get_arg($i) . "</td>";
        }
    }


    $result .= "</tr>";

    echo $result;
}

?>