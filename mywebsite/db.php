<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "fashion_store";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>
