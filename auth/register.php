<?php
session_start();
include '../database/DbConnect.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_POST['email'];

    // Perform any necessary validation on the form data
    // ...

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo 'Error: Passwords do not match.';
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    // Insert the data into your database (assuming you have a 'users' table)
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === true) {
        echo 'Registration successful.';
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>