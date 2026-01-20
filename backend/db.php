<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "prices_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
