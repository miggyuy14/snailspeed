<?php
include '../database/DbConnect.php';

// Retrieve the username and password from the form
$email = $_POST["email"];
$password = $_POST["password"];

// Check if the user exists and password matches
$query = "SELECT * FROM users WHERE email = :email";
$stmt = $db->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    // Valid credentials
    echo "Login successful!";
    // You can redirect the user to a different page or perform additional actions here
} else {
    // Invalid credentials
    echo "Invalid email or password.";
}
?>