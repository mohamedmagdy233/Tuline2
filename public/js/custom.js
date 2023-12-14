// nav
function openLink(link) {
    window.open(link, '_blank');
}
let openNav = document.querySelector(" nav .nav-bar .nav-icon");
let resNav = document.querySelector("nav .nav-ul");
let nav = document.querySelector(".nav")
let contNav = document.querySelector(".contact-nav")
let logo = document.querySelector("nav .logo img");

openNav.addEventListener("click", function() {
    resNav.classList.toggle("nav-active");
});
window.onscroll = () => {
    resNav.classList.remove("nav-active");
}
window.addEventListener("scroll", function() {
    nav.classList.toggle("sticky", this.window.scrollY > 100);
    if (this.window.scrollY > 100) {
        logo.setAttribute('src', '/images/WhatsApp_Image_2023-09-16_at_11.00 4.png');
    } else {
        logo.setAttribute('src', '/images/WhatsApp_Image_2023-09-16_at_11.00 2.png');
    }
});
window.addEventListener("scroll", function() {
    contNav.classList.toggle("sticky", this.window.scrollY > 100);
});

// header buttons
let beige = document.querySelector("header .beige-btn");
let border = document.querySelector("header .border-btn");

beige.addEventListener("mouseenter", function() {
    border.classList.add("border-hvr");
    beige.classList.add("beige-hvr");
});
beige.addEventListener("mouseleave", function() {
    border.classList.remove("border-hvr");
    beige.classList.remove("beige-hvr");
});
border.addEventListener("mouseenter", function() {
    border.classList.add("border-hvr");
    beige.classList.add("beige-hvr");
});
border.addEventListener("mouseleave", function() {
    border.classList.remove("border-hvr");
    beige.classList.remove("beige-hvr");
});



// index swiper 
var swiper = new Swiper(".index-swiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
//   desk swiper
var swiper = new Swiper(".desk-swiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// vertical swiper 
var swiper = new Swiper(".v-swiper", {
    direction: "vertical",
    loop: true,
    grabCursor: true,
    swipeDirection: 'next',
    edgeSwipeDetection: 'true',
    autoplay: {
        delay: 3500,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },
});