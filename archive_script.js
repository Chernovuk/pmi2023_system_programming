var trigger = document.getElementsByClassName("Slider_trigger")[0];

var slider = document.getElementsByClassName("Year_choice")[0];
var arrow = document.getElementsByClassName("Arrow")[0];


var journals = document.getElementsByClassName("Journals")[0];

trigger.addEventListener("click", function(el){
    if (slider.classList.contains("active")) {
        slider.classList.remove("active");
        arrow.classList.remove("active");
        if ($(document).width() <= 800) {
            journals.classList.remove("active");
        }
    }
    else {
        slider.classList.add("active");
        arrow.classList.add("active");
        if ($(document).width() <= 800) {
            journals.classList.add("active");
        }
    }
});

