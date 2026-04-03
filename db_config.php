<?php
$host = "localhost";
$user = "root"; // Aapka database username
$pass = "";     // Aapka database password
$dbname = "color_trading";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
