// $(document).ready(function() {
//     $('.header_burger').click(function(event) {
//         $('.header_burger, .menu').toggleClass('active');
//     });
// });

var menu_trigger = document.getElementsByClassName("Burger_trigger")[0];

var menu_slider = document.getElementsByClassName("Menu")[0];

menu_trigger.addEventListener("click", function(el){
    if (menu_slider.classList.contains("active")) {
        menu_slider.classList.remove("active");
    }
    else {
        menu_slider.classList.add("active");
    }
});

var burger = document.getElementsByClassName("Header_burger")[0];


$(window).resize(function() {
    if ($(document).width() <= 800) {
    burger.classList.add("active");
    }

    if ($(document).width() > 800) {
        burger.classList.remove("active");
    }
});
