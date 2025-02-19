<?php

#dsn - data source name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase"; # tells php how to connect to the database
$dbusername = "root"; # The default MySQL username for XAMPP is "root"
$dbpassword = ""; # The default password for XAMPP is an empty string ""

try {
    #pdo - php data object
    $pdo = new PDO($dsn, $dbusername, $dbpassword); # creates a new pdo object (OOP)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

# PDO::ATTR_ERRMODE - Error reporting mode of PDO. Can take one of the following values:
# PDO::ERRMODE_EXCEPTION - Throws PDOExceptions.