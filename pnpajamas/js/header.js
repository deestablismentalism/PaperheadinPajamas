document.addEventListener("DOMContentLoaded", function(){
    const menu = document.querySelector(".header-nav-bar");
    const menuItems = document.querySelectorAll(".header-nav-bar li");
    menu.addEventListener("touchstart", menuItems.classList.toggle("touched"));
});