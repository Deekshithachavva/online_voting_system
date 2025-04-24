<?php

$host = "localhost";
$dbname = "e-voting-system";
$usernameDB = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $usernameDB,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;

?>