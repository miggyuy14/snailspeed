<?php 
include 'layouts\headersHomepage.php'?>
    <body>
        <?php include './layouts/navbar.php';?>
        <!-- Product section-->
        <section class="py-0" id="top">
            <div class="container px-4 px-lg-0 my-5">
            
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide carousel-fade  card-img-top mb-5 mb-md-0" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $images = [
                            'foxy_showcase_1.jpg',
                            'Pepperoni.png',
                            'BestSeller.png',
                        ];
                        
                        // Loop through the images and create carousel slides
                        foreach ($images as $index => $image) {
                            $active = ($index == 0) ? 'active' : ''; // Set the first image as active
                            
                            echo '<div class="carousel-item ' . $active . '">';
                            echo '<img class="d-block w-100" src="assets/' . $image . '" alt="Slide">';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder text-uppercase">Discover the Ultimate Pizza Experience</h1>
                        <p class="lead font-italic">Indulge in our mouthwatering pizzas, made with love and a secret recipe that will leave you craving for more.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light" style="background-image: linear-gradient(100deg, #fffdd0, #fbf9d4, #f8f6d8);">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets\HawaiianPizza.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Hawaiian Pizza</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    ₱300 - ₱450
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets\PosterBackground2.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product price-->
                                    ₱420 - ₱750
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets\PosterBackground.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>      
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₱450 - ₱750</span>
                                </div>
                                <div class="text-center">
                                    ₱249 - ₱399
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets\PepperoniLandscape.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pepperoni Pizza</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    ₱300 - ₱450
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './layouts/footer.php'; ?>
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
    </body>
</html>
