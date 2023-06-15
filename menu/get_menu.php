<?php
// Retrieve menu items from the database
$menuItems = [
    ["id" => 1, "name" => "Pizza", "description" => "Delicious pizza with various toppings.", "price" => 9.99],
    ["id" => 2, "name" => "Burger", "description" => "Juicy burger with fries.", "price" => 7.99],
    // Add more menu items as needed
];

// Send the menu items as JSON response
header('Content-Type: application/json');
echo json_encode($menuItems);
?>
