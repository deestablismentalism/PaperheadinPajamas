document.addEventListener("DOMContentLoaded", function() {

    let cart = document.querySelector(".header-cart");
    let cartItems = document.querySelector(".header-cart-popup-mobile");
    let close = document.querySelector(".cart-close-btn");
    let isCartOpen = false;
    
    if(!isCartOpen) {
        cartItems.style.display = "none";
        
        cart.onclick = function () {
            cartItems.style.display = "block";
            isOpen = true;
        }
        close.onclick = function () {
            cartItems.style.display = "none";
            isOpen = false;
        }
    }
});