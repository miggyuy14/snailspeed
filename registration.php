<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Validate form data (add your validation logic here)

// Connect to the database
$host = 'localhost'; // Replace with your database host
$dbname = 'foxy'; // Replace with your database name
$username = 'root'; // Replace with your database username
$db_password = ''; // Replace with your database password

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $db_password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Database connection failed: " . $e->getMessage());
}

// Insert data into the database
try {
    $stmt = $pdo->prepare("INSERT INTO registration (name, email, contact, address, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $contact, $address, $password]);
    // Registration successful
} catch (PDOException $e) {
    die("Error inserting data into the database: " . $e->getMessage());
}

// Close the database connection
$pdo = null;

// Example: Echo back the form data as JSON response
echo json_encode($_POST);
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
