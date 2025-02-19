<?php
# --- Checking if the Request Method is POST ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
/*
    $_SERVER["REQUEST_METHOD"] is a superglobal variable. It contains the request method used to access the page.

    "REQUEST_METHOD" checks how the page was accessed:

        "GET" 
        
            If accessed via a normal URL (like clicking a link).

        "POST" 
        
            If accessed via form submission (e.g., after clicking a submit button).

    * The if statement checks if the request method is "POST", meaning this script was triggered by a form submission.
    * If the page was not accessed via a form submission (e.g., someone typed the URL directly), 
    we want to redirect them away (which happens later in the code).


--- Retrieving User Input from the Form --- */
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

/*
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    $_POST is another superglobal variable in PHP.

    $_POST["username"]
    
        Gets the value the user typed in the form field named "username".

    $_POST["pwd"]
    
        Gets the password the user entered in the "pwd" field.
    
    $_POST["email"]
    
        Gets the email the user entered in the "email" field.

    Important!: This is NOT safe because it doesn’t validate or sanitize user input. This is how SQL injection can happen. 

--- Using a Try-Catch Block --- */
    try {
/*
    try starts a try-catch block, which is used to handle errors gracefully.

    If an error happens inside the try block, the catch block will handle it instead of crashing the script.


--- Including the Database Connection --- */
        require_once "dbh.inc.php"; 
/*
    This includes another PHP file called dbh.inc.php.

    That file is supposed to contain the database connection code.

    require_once makes sure that the file is included only once.

    If the file is missing, the script stops immediately (because of require instead of include).

    include - include the file and continue if the file is not found
    require - include the file and stop if the file is not found
    include_once - include the file only once
    require_once - include the file only once

--- SQL Query for Inserting User Data --- */
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
/*
    This is an SQL query written as a PHP string.

        INSERT INTO users 
        
            Adds a new row into the "users" table.

        (username, pwd, email)
        
            The columns that will receive the new values

        VALUES (:username, :pwd, :email);
        
            These are placeholders that will be replaced by actual user input.

    Why use placeholders (:username, :pwd, etc.)?

        This prevents SQL injection, a security vulnerability where attackers inject malicious SQL commands.

--- Preparing the Query for Execution --- */
        $stmt = $pdo->prepare($query);
/*
    This tells the database "Get ready to execute this SQL query".

    The query is not executed yet, it’s just prepared.

    $pdo comes from dbh.inc.php (below:)

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

--- Binding Parameters (Replacing Placeholders with Real Values) --- */
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
/*
    bindParam() replaces the placeholders (:username, :pwd, :email) with actual values.

    This makes sure that the database treats them as values, not code, preventing SQL injection.

    Example:

    (php)
    $username = "JohnDoe";

    After binding, the SQL query will look like:

    (sql)
    INSERT INTO users (username, pwd, email) VALUES ('JohnDoe', 'password123', 'johndoe@example.com');  

--- Executing the Query --- */
        $stmt->execute();
/* This sends the prepared query to the database and inserts the user data.

--- Closing the Connection --- */
        $pdo = null;
        $stmt = null;
/*
    $pdo = null;

        Closes the connection to the database.
    
    $stmt = null;
    
        Closes the statement to free memory.

--- Redirecting the User ---*/
        header("Location: ../form.php");
        die();
/*
    header("Location: ../form.php");

        Redirects the user to "form.php" after successful registration.

        "../" means go up one folder level (relative path).

    die();

        Stops script execution immediately after the redirect.

--- Handling Errors --- */
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
/*
    catch (PDOException $e) 
    
        This catches any errors related to the database (PDOException).

    die("Query failed: " . $e->getMessage());

        Stops execution and displays the error message if something goes wrong.

--- If Someone Accesses the Page Without Submitting the Form --- */
} else {
    header("Location: ../form.php");
}
/*
    If $_SERVER["REQUEST_METHOD"] is not "POST" (i.e., someone accessed the file manually), they are redirected to "form.php"
*/

# # # # # #

# What’s Missing?

/*
    Password Hashing:
        Currently, the password is stored as plain text, which is a huge security risk!
        To fix this, replace:

        $pwd = $_POST["pwd"];

        with:

        $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

        This encrypts the password before storing it.

    Input Validation & Sanitization:

        This code does not check if:

            The username is too short.
            The email is valid.
            The password is strong enough.

        Before inserting, validate user input using filter_var() and strlen().
    
    Better Error Handling:

        Instead of die(), display a friendly error message to users
*/

