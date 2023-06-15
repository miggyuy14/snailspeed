<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <script>
    function validateForm() {
        var password = document.getElementsByName('password')[0].value;
        var confirmPassword = document.getElementsByName('confirm_password')[0].value;
  
        if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
        }
  
        return true;
    }

  </script>
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    button[type="submit"]:hover {
    background-color: #45a049;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST" onsubmit="return validateForm()">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Perform necessary validation and database operations here
  
  // Redirect to success page after successful signup
  header('Location: success.html');
  exit();
}
?>


</html>
