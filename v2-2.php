<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Вариант 2 - 2 задание</title>
</head>
<body>
<?php

$url1 = 'https://www.php.net/manual/en/function.str-starts-with.php';
$url2 = 'http://www.php.net/manual/en/function.str-starts-with.php';
$url3 = 'www.php.net/manual/en/function.str-starts-with.php';

$pic1 = 'picture.jpg';
$pic2 = 'picture.png';
$pic3 = 'picture';

$string1 = 'Hello world';
$string2 = 'world';

function urlCheck($url) {
    if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
        return true;
    } else {
        return false;
    }
}

function picCheck($pic) {
    if (str_ends_with($pic, '.png') || str_ends_with($pic, '.jpg')) {
        return true;
    } else {
        return false;
    }
}

function stringCheck($string) {
    if (strlen($string) > 5) {
        return substr($string, 5) . "...";
    } else {
        return $string;
    }
}

echo $url1 . " - " . urlCheck($url1) . '<br>';
echo $url2 . " - " . urlCheck($url2) . '<br>';
echo $url3 . " - " . urlCheck($url3) . '<br>';

echo '<br>';

echo $pic1 . " - " . picCheck($pic1) . '<br>';
echo $pic2 . " - " . picCheck($pic2) . '<br>';
echo $pic3 . " - " . picCheck($pic3) . '<br>';

echo '<br>';

echo $string1 . " - " . stringCheck($string1) . '<br>';
echo $string2 . " - " . stringCheck($string2) . '<br>';

?>
</body>
</html>
