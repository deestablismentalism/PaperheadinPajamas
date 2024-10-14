document.addEventListener("DOMContentLoaded", function(){

    let menuBtn = document.querySelector(".btn-container");
    let menuItems = document.querySelector(".header-nav-bar-mobile");
    let cart = document.querySelector(".header-cart");
    let cartItems = document.querySelector(".header-cart-popup-mobile");
    let close = document.querySelector(".cart-close-btn");
    
    let isOpen = false;
   
    menuBtn.onclick = function (){

        if(!isOpen) {
            menuItems.style.display = "none";
            menuBtn.style.backgroundPosition = "center, center left 50px";
            isOpen = true;
        }
        else if(isOpen) {
            menuItems.style.display = "block";
            menuBtn.style.backgroundPosition = "center left 50px, center";
            isOpen = false;            
        }
    }
    
    if(!isOpen) {
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