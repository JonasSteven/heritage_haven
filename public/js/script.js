// HOME SLIDER //
// let menu = document.querySelector('#menu_btn');
// let navbar = document.querySelector('.header .navbar');

// menu.onclick = () => {
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active');
// }

// window.onscroll = () => {
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');
// }

var sidemenu = document.getElementById("navbar");

function openmenu(){
    sidemenu.style.right = "0";
}

function closemenu(){
    sidemenu.style.right = "-200px";
}

var swiper = new Swiper(".home-slider", {
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// HOME ROOM SLIDE //
var swiper = new Swiper(".room-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});