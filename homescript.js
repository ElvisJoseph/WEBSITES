     let cart = [];
        
        function addToCart(name, price) {
            cart.push({ name, price });
            updateCart();
        }
        
        function updateCart() {
            let cartItems = document.getElementById("cart-items");
            let cartTotal = document.getElementById("cart-total");
            cartItems.innerHTML = "";
            let total = 0;
            cart.forEach((item, index) => {
                total += item.price;
                cartItems.innerHTML += `<div class='cart-item'>
                    <span>${item.name} - $${item.price.toFixed(2)}</span>
                    <button onclick="removeFromCart(${index})">Remove</button>
                </div>`;
            });
            cartTotal.textContent = total.toFixed(2);
        }
        
        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }
        
        function clearCart() {
            cart = [];
            updateCart();
        }
        document.addEventListener("DOMContentLoaded",function(){
            const observerOptions = {
                threshold: 0.1
            }
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const featuredSection = document.querySelector('.featured');
            const productList = document.querySelector('.product-list');

            observer.observe(featuredSection);
            observer.observe(productList);
        });