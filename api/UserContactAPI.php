<?php
include '../database/DbConnect.php';

// Create a new PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Fetch data from the database
$query = "SELECT id, first_name, last_name, email, contact_number, message FROM contact_info";
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Prepare the response
$response = [
    "data" => $data
];

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>