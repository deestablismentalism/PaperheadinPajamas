document.addEventListener("DOMContentLoaded", function(){

    let menuBtn = document.querySelector(".nav-bar-btn");
    let menuItems = document.querySelector(".header-nav-bar-mobile");
    
    let isOpen = false;
   
    menuBtn.onclick = function (){

        if(!isOpen) {
            menuItems.style.display = "block";
            menuBtn.style.backgroundPosition = "center left 50px, center";
            isOpen = true;
        }
        else if(isOpen) {
            menuItems.style.display = "none";
            menuBtn.style.backgroundPosition = "center, center left 50px";
            isOpen = false;
        }
    }
});