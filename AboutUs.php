<!DOCTYPE html>
<html lang="en">
    <?php include 'layouts\headerAboutUs.php'?>
<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/foxy-templated/layouts/navbar.php";?>
            <!-- Product section-->
            <section class="py-5 border" id="top">
            <div class="container px-4 px-lg-5 my-5">
            

                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide card-img-top mb-5 mb-md-0" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $images = [
                            'foxy_showcase_1.jpg',
                            'Pepperoni.png',
                            'BestSeller.png'
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
                        <h1 class="display-5 fw-bolder">Great Pizzas awaits you!</h1>
                        <p class="lead">All delicious pizzas are homemade with original recipe that will surely satisfy your taste.</p>
                    </div>
                </div>
            </div>
        </section>
    <?php include $_SERVER["DOCUMENT_ROOT"] . "/foxy-templated/layouts/footer.php";?>
</body>
</html>