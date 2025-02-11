<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<!-- insures the form submits to the !same page! while preventing security vulnerabilities like XSS attacks. 
XSS (Cross-Site Scripting) is a type of security vulnerability that allows attackers to inject malicious scripts 
(usually JavaScript) into web pages that are then viewed by other users. These scripts can steal user data, 
modify webpage content, or redirect users to malicious sites. 
-->
    <input type="number" name="num01" placeholder="Number one" required>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select> 
    <input type="number" name="num02" placeholder="Number two" required>
    <button >Calculate</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){ # ensures the script only runs when the form is submitted

    //Grabbing the values from the form

    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT); 
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);

    // Error handling

    $errors = false;

    if(empty($num01) || empty($num02) || empty($operator)){
        echo "<p class='calc-error'>Please fill in all the fields!</p>";
        $errors = true;
    }

    if(!is_numeric($num01) || !is_numeric($num02)){
        echo "<p class='calc-error'>Please enter a valid number!</p>";
        $errors = true;
    }

    // Calculate the numbers if no errors

    if(!$errors){
        $value = 0;
        switch($operator){
            case "add":
                $value = $num01 + $num02;
                break;
            case "subtract":
                $value = $num01 - $num02;
                break;
            case "multiply":
                $value = $num01 * $num02;
                break;
            case "divide":
                $value = $num01 / $num02;
                break;
            default:
                echo "<p class='calc-error'>Something went HORRIBLY wrong!</p>";
        }

        echo "<p class='calc-result'>Result = " .
        $value . "</p>";
    }
}
?>
</body>
</html>