<!DOCTYPE html>
<html lang="en">
<?php include './layouts/headerMenu.php';?>
<body>
<?php include './layouts/navbar.php';?>
<div class="container">
    <div class="menu-heading">
        <h1 class="text-center">Menu</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image1.jpg" alt="Item 1" class="img-fluid">
                <h5>Beef Shawarma</h5>
                <p>Description of Item 1</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item1" value="420">
                            12" ₱420
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item1" value="600">
                            14" ₱600
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image2.jpg" alt="Item 2" class="img-fluid">
                <h5>All Meat Supreme</h5>
                <p>Description of Item 2</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item2" value="450">
                            12" ₱450
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item2" value="650">
                            14" ₱650
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image3.jpg" alt="Item 3" class="img-fluid">
                <h5>Oppa Pizza</h5>
                <p>Description of Item 3</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item3" value="600">
                            12" ₱600
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item3" value="750">
                            14" ₱750
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image4.jpg" alt="Item 4" class="img-fluid">
                <h5>Pepperoni Pizza</h5>
                <p>Description of Item 4</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item4" value="300">
                            12" ₱300
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item4" value="450">
                            14" ₱450
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image5.jpg" alt="Item 5" class="img-fluid">
                <h5>Sisig Pizza</h5>
                <p>Description of Item 5</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item5" value="450">
                            12" ₱450
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item5" value="620">
                            14" ₱620
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image6.jpg" alt="Item 6" class="img-fluid">
                <h5>Hawaiian Pizza</h5>
                <p>Description of Item 6</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item6" value="300">
                            12" ₱300
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item6" value="450">
                            14" ₱450
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image7.jpg" alt="Item 7" class="img-fluid">
                <h5>Cheese Pizza</h5>
                <p>Description of Item 7</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item7" value="300">
                            12" ₱300
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item7" value="450">
                            14" ₱450
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="menu-item">
                <img src="path_to_image8.jpg" alt="Item 8" class="img-fluid">
                <h5>Spinach Pizza</h5>
                <p>Description of Item 8</p>
                <div class="size-options">
                    <div>
                        <label>
                            <input type="radio" name="size-item8" value="350">
                            12" ₱350
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="size-item8" value="500">
                            14" ₱500
                        </label>
                    </div>
                </div>
                <a href="#" class="add-to-cart-btn" onclick="addToCart(this)">
                    Add to Cart
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Cart -->
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h2>Your Cart</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="cart-items">
                        <!-- Cart items will be dynamically added here -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cart-total">
                        <h4>Cart Total</h4>
                        <p>Total: <span id="cart-total"></span></p>
                    </div>
                    <div class="cart-actions">
                        <a href="#" class="btn btn-primary btn-block proceed-to-checkout-btn">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 bg-dark" style="background-image: linear-gradient(100deg, #546e7a, #78909c); padding: 0px;">
    <div class="container">
        <img src="assets\foxy_s_kitchen-removebg-preview.png" alt="Logo" style="height: 85px; width: auto; margin-left: auto; margin-right: auto; display: block;">
        <p class="m-0 text-center text-white">© 2023 Foxy's Kitchen Philippines, All Rights Reserved <br>All delicious products are homemade with original recipe that will surely satisfy your taste.</p>
    </div>
</footer>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-UjX2R/N1AP2cbixrmv8A9eHTO3I2z6jk0PvWqL35Qu7asEo6ttTjAxZFsXu8S8V6BQYB2XXdYgDq6fyCz8Fdug==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-BKjg7W9shbUop7TviKwktrlnHGqyXlUD+I9P+0P+RLiUsYtGSWWz2F+ECxQsQD9MDDccOJL2Zr6mb51+ZvV6vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- JavaScript -->
<script>
    // Function to add an item to the cart
    function addToCart(button, itemName, itemImage) {
        var price = 0;
        var selectedSize = button.parentNode.querySelector("input[type='radio']:checked");
        if (selectedSize) {
            price = selectedSize.value;
        }

        if (price > 0) {
            // Create the cart item
            var cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");

            // Item image
            var cartItemImage = document.createElement("img");
            cartItemImage.src = itemImage;
            cartItemImage.alt = itemName;
            cartItemImage.classList.add("img-fluid");
            cartItem.appendChild(cartItemImage);

            // Item name
            var cartItemName = document.createElement("h5");
            cartItemName.textContent = itemName;
            cartItem.appendChild(cartItemName);

            // Item size
            var cartItemSize = document.createElement("p");
            cartItemSize.textContent = "Size: " + selectedSize.nextSibling.textContent.trim();
            cartItem.appendChild(cartItemSize);

            // Item price
            var cartItemPrice = document.createElement("p");
            cartItemPrice.textContent = "Price: ₱" + price;
            cartItem.appendChild(cartItemPrice);

            // Add the cart item to the cart
            var cartItemsContainer = document.querySelector(".cart-items");
            cartItemsContainer.appendChild(cartItem);

            // Update the cart total
            updateCartTotal();

            // Open the cart modal
            openCart();
        }
    }

    // Function to update the cart total
    function updateCartTotal() {
        var cartItems = document.querySelectorAll(".cart-item");
        var total = 0;

        for (var i = 0; i < cartItems.length; i++) {
            var price = parseFloat(cartItems[i].querySelector("p:nth-child(4)").textContent.replace("Price: ₱", ""));
            total += price;
        }

        // Update the cart total element
        var cartTotal = document.getElementById("cart-total");
        cartTotal.textContent = "₱" + total.toFixed(2);
    }

    // Function to open the cart modal
    function openCart() {
        var cart = document.querySelector(".cart");
        cart.style.display = "block";
    }

    // Function to close the cart modal
    function closeCart() {
        var cart = document.querySelector(".cart");
        cart.style.display = "none";
    }
</script>
</body>
</html>
