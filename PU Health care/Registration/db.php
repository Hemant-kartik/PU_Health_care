<?php
$host = "localhost";
$user = "root";
$password = ""; // Your MySQL password
$dbname = "user_management";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
