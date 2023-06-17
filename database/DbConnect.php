<?php

$host = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = "Miggyuy102295"; // Replace with your database password
$database = "foxy"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>