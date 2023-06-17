<?php
session_start();
include '../database/DbConnect.php';
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $role = 'user';

    // Perform any necessary validation on the form data
    // ...

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo 'Error: Passwords do not match.';
        exit;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    // Insert the data into your database (assuming you have a 'users' table)
    $sql = "INSERT INTO users (first_name, last_name, email, contact, address, password, role) VALUES ('$first_name', '$last_name', '$email', '$contact', '$address', '$password', '$role')";

    if ($conn->query($sql) === true) {
        $_SESSION['name'] = $user['first_name']. ' ' . $user['last_name'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../index.php");
    } else {
        echo 'Error: ' . $sql . '<br>' . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>