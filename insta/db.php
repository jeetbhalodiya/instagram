<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Your DB username
$password = ""; // Your DB password
$dbname = "instagram"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
