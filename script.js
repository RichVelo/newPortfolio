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

//variable targeted to nav
const navBar = document.querySelector('nav')

//variable for last window Y-axis position
let prevScrollpos = window.pageYOffset

// on scroll in the window function is called
window.onscroll = function() {

    //variable for current window Y-axis position
    let currentScrollpos = window.pageYOffset
    //if statement to check which is greater - last or current and if last we remove
    //the class of hide from the nav element or add it if current is greater.
    if(prevScrollpos > currentScrollpos) {
        navBar.classList.remove("hide")
    } else {
        navBar.classList.add("hide")
    }

    prevScrollpos = currentScrollpos;
}

//light or dark mode

const lightOrDarkMode = document.querySelector('#light-dark-mode')

lightOrDarkMode.addEventListener('click', (e) => {
    e.preventDefault()
    const navbar = document.querySelector('nav')
    document.body.classList.toggle('theme')
    navbar.classList.toggle('theme')
})