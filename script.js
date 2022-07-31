//burger menu
const menu = document.querySelector(".menu");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        closeIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}

hamburger.addEventListener("click", toggleMenu);


//nav hide on scroll down and appear on scroll up

const navBar = document.querySelector('nav')
let prevScrollpos = window.pageYOffset
window.onscroll = function() {

    let currentScrollpos = window.pageYOffset
    if(prevScrollpos > currentScrollpos) {
        navBar.classList.remove("hide")
    } else {
        navBar.classList.add("hide")
    }

    prevScrollpos = currentScrollpos;
}