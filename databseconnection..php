<?php
$servername = "localhost"; // or your server name
$username = "root";
$password = "12345454";
$dbname = "organisation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
