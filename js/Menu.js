// Fetch menu items from the server using AJAX
fetch('get_menu.php')
    .then(response => response.json())
    .then(menuItems => {
        const menuTable = document.getElementById('menu-table');
        const tbody = menuTable.createTBody();

        // Loop through each menu item and create a table row
        menuItems.forEach(item => {
            const row = tbody.insertRow();
            row.innerHTML = `
                <td>${item.name}</td>
                <td>${item.description}</td>
                <td>${item.price}</td>
                <td><button onclick="addToCart(${item.id})">Add to Cart</button></td>
            `;
        });
    })
    .catch(error => {
        console.log('Error fetching menu items:', error);
    });

// Function to handle adding items to the cart
function addToCart(itemId) {
    // Implement your logic to add the item to the cart
    // You can use AJAX to send the data to the server
    console.log('Item added to cart:', itemId);
}
