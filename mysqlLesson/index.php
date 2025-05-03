<?php

$link = mysqli_connect("localhost", "root", "");

if (!$link) {
    die('Could not connect: ' . mysqli_connect_error());
}

echo 'Connected successfully. Host info: ' . mysqli_get_host_info($link) . "<br>";

$dbname = "demo";

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if (mysqli_query($link, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($link) . "<br>";
}

mysqli_select_db($link, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

if (mysqli_query($link, $sql)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($link) . "<br>";
}

$sql = "INSERT INTO persons (first_name, last_name, email) 
VALUES ('Peter', 'Parker', 'peterparker@mail.com');

INSERT INTO persons (first_name, last_name, email) 
VALUES  ('John', 'Rambo', 'johnrambo@mail.com');

INSERT INTO persons (first_name, last_name, email) 
VALUES  ('Clark', 'Kent', 'clarkkent@mail.com');

INSERT INTO persons (first_name, last_name, email) 
VALUES  ('John', 'Carter', 'johncarter@mail.com');

INSERT INTO persons (first_name, last_name, email) 
VALUES ('Harry', 'Potter', 'harrypotter@mail.com')";

if(mysqli_multi_query($link, $sql)) {
    echo "New records created successfully<br>";
} else {
    echo "Error: " . mysqli_error($link) . "<br>";
}

mysqli_close($link);
?>