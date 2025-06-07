<?php
$host = "localhost";
$user = "root";
$port = "3307";
$password = "";
$database = "users_db";



$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection Faile. Error:" . $conn->connect_error);
}
