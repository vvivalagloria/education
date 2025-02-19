<?php
    declare(strict_types = 1); # strict typing, makes functions to accept only the type of data they are expecting
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function sayHello(){            # no parameters
        return "Hello, World!";
    }

    echo sayHello() . "<br>";

    $test = sayHello(); # if function is returning a value, not echoing it - we can assign it to a variable

    function sayHi($name){              # with 1 parameter
        return "Hi, " . $name . "!";
    }

    echo sayHi("John") . "<br>";

    function sayHey($name = "Anonymous"){        # with default parameter
        return "Hey, " . $name . "!";
    }

    echo sayHey() . "<br>";

    function sayHoy(string $name){        # type declaration
        return "Hey, " . $name . "!";
    }

    // echo sayHoy(123) . "<br>"; - Uncaught TypeError: sayHoy(): Argument #1 ($name) must be of type string, int given, called in

    function calculator(int $num01, int $num02){
        $result = $num01 + $num02;
        return $result;
    }

    echo calculator(5, 10) . "<br>";

    $test1 = "Sam";

    function test(){
        global $test1; # global variable, can't a variable from outside the function without using "global" keyword
        return "Cool name, " . $test1 . "!";
    }

    echo test() . "<br>";
?>
</body>
</html>