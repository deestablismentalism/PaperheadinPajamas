document.addEventListener("DOMContentLoaded", function(){

    let menuBtn = document.querySelector(".btn-container");
    let menuItems = document.querySelector(".header-nav-bar-mobile");
    let isMenuOpen = false;
   
    menuBtn.onclick = function (){

        if(!isMenuOpen) {
            menuItems.style.display = "block";
            menuBtn.style.backgroundPosition = "center left 50px, center ";
            isMenuOpen = true;
        }
        else if (isMenuOpen) {

            menuItems.style.display = "none";
            menuBtn.style.backgroundPosition = "center, center left 50px";
            isMenuOpen = false;            
        }
    }

});