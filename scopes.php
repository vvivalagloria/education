<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $test = "Sam"; // global scope

    echo $test . "<br>"; // Sam

    function myFunction() {
        $localVar = "Hello, World!"; // local scope
        echo $localVar; 
    }

    echo myFunction() . "<br>"; // Hello, World!

    echo $localVar; // Undefined variable $localVar

    function myFunction2() {
        return $test;
    }

    echo myFunction2() . "<br>"; // Undefined variable $test
    
    function myFunction3() {
        global $test;
        return $test; 
    }

    echo myFunction3() . "<br>"; // Sam

    function myFunction4() {
        return $GLOBALS["test"];
    }

    echo myFunction4() . "<br>"; // Sam

    function myFunction5() {
        $staticVar = 2;

        $staticVar++;

        return $staticVar;
    }
    
    echo myFunction5() . "<br>"; // 1
    echo myFunction5() . "<br>"; // 1

    function myFunction6() {

        static $staticVar = 4; // static scope - retains value between function calls

        $staticVar++;

        return $staticVar;
    }
    
    echo myFunction6() . "<br>"; // 1
    echo myFunction6() . "<br>"; // 1

?>
</body>
</html>