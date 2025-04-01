<?php

$stringChecker = function (string $username, string $email){

    $username = ucwords($username);

    $arr = array();

    if (strpos($email, '@') !== false){

        $email = strtolower($email);

        array_push($arr, $username, $email);


    } else {

        return false;
    }

    print_r ($arr);
    echo "<br>";

};

$stringChecker('vivaLaGloria', 'viva@gmail.com');
$stringChecker('vivaLaVida', 'Vida@Gmail.Com');
$stringChecker('vivaLaGloria', 'viva#gmail.com');
$stringChecker('vivaLaGloria', 'Viva#Gmail.com');

