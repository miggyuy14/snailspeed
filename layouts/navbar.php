<!-- Navigation-->
<?php 
session_start();
include 'DocumentRootReference.php';?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: linear-gradient(100deg, #546e7a, #78909c);">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php"><img style="height: 80px; width: 140px; padding: 0px;" src="assets\foxy_s_kitchen-removebg.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a id="active1" class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a id="active2" class="nav-link" href="AboutUs.php">About</a></li>
                        <li class="nav-item"><a id="active3" class="nav-link" href="ContactUs.php">Contact Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                        <?php
                        if (isset($_SESSION['role'])) {
                          $role = $_SESSION['role'];

                          if($role == 'admin'){
                            echo '<li class="nav-item"><a id="active4" class="nav-link" href="UserContact.php">Admin</a></li>';
                          }
                          echo '<li class="nav-item"><a id="active4" class="nav-link">'. $_SESSION['name'] .'</a></li>';
                        }else{
                          echo '<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button></li>';
                          echo '<li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Sign up</button></li>';
                        }
                        ?>
                        <!-- Button trigger modal -->
                        
                        
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
            <label for="email">email</label>
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

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
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
            <label for="email">email</label>
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