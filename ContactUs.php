<!DOCTYPE html>
<html lang="en">
    <?php 
    
    include 'layouts/headerContactUs.php'?>
<body>
    <?php 
    include 'database/DbConnect.php';
    include 'layouts/navbar.php';
    ?>
    <h2 style="text-align: center;">Contact Us</h2>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $contact_number = $_POST['contact_no'];
        $message = $_POST['message'];
        
        // Validate form data (you can add more validation if needed)
        if (empty($first_name) || empty($email) || empty($message)) {
            echo '<p>Please fill in all fields.</p>';
        } else { 
            // Create a new PDO instance
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            
            // Prepare and execute the SQL query to insert the data into the database
            $stmt = $pdo->prepare("INSERT INTO contact_info (first_name, last_name, email, contact_number,message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$first_name, $last_name, $email, $contact_number,$message]);
            
            if ($stmt) {
                echo '<p>Your message has been sent successfully. We will get back to you soon!</p>';
            } else {
                echo '<p>An error occurred while sending your message. Please try again later.</p>';
            }
        }
    }
    ?>
    
    <form method="post" action="" class="contact-form">
        <label for="name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="email">Contact No:</label>
        <input type="text" name="contact_no" id="contact_no" required>
        <br>
        <label for="message">Message:</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php include './layouts/footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>