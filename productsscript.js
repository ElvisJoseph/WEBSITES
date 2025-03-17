function showCategory(category) {
    let sections = document.querySelectorAll('.products');
    sections.forEach(section => {
        section.classList.remove('show');
        setTimeout(() => {
            section.style.display = 'none';
        }, 10000);
    });
    let activeSection = document.getElementById(category);
    activeSection.style.display = 'block';
    setTimeout(() => {
        activeSection.classList.add('show');
    }, 50000);
}
 // Initialize the cart
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Function to add a product to the cart
function addToCart(productName, price) {
// Check if the product already exists in the cart
let product = cart.find(item => item.name === productName);

if (product) {
// If the product exists, increase the quantity
product.quantity += 1;
} else {
// If the product doesn't exist, add a new item to the cart
cart.push({ name: productName, price: price, quantity: 1 });
}

// Save the cart to localStorage
localStorage.setItem('cart', JSON.stringify(cart));

// Optionally, update the cart display
updateCartDisplay();

console.log(productName + " added to cart at $" + price);
}

// Function to update the cart display (example implementation)
function updateCartDisplay() {
let cartDisplay = document.getElementById('cart-display');
cartDisplay.innerHTML = '';

cart.forEach(item => {
let cartItem = document.createElement('div');
cartItem.textContent = `${item.name} - $${item.price} x ${item.quantity}`;
cartDisplay.appendChild(cartItem);
});
}

// Example HTML for the cart display
// <div id="cart-display"></div>