<!-- Navigation-->
<?php include 'DocumentRootReference.php';?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(100deg, #546e7a, #78909c);">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><img style="height: 80px; width: 140px; padding: 0px;" src="assets\foxy_s_kitchen-removebg.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a id="active1" class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a id="active2" class="nav-link" href="AboutUs.php">About</a></li>
                        <li class="nav-item"><a id="active3" class="nav-link" href="ContactUs.php">Contact Us</a></li>
                        <li class="nav-item"><a id="menu" class="nav-link" href="#">Menu</a></li>

                        <li style="margin-left: 578px;">
                        <li class="nav-item"><a id="active4" class="nav-link" href="UserContact.php">Admin</a></li>
                        <!-- Button trigger modal -->
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" style="margin-right: 5px;">
                            Login
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrationModal" style="margin-right: 5px;">
                            Sign-Up
                            </button>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="auth/login.php" method="POST">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Registration modal -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="registration.php" method="post">
                        <!-- Your form fields here -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <div id="registrationError" style="color: red;"></div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script>
        // Function to hide the modal button and form
        function hideModalContent() {
            var modalButton = document.getElementById('modalButton');
            var modalForm = document.querySelector('#registrationModal form');
            if (modalButton && modalForm) {
                modalButton.style.display = 'none';
                modalForm.style.display = 'none';
            }
        }

        // Simulating successful registration
        var registrationSuccess = true; // Replace with your own logic to determine registration success

        if (registrationSuccess) {
            // Call the function to hide the modal button and form
            hideModalContent();
        }
    </script>

