var trigger = document.getElementsByClassName("Slider_trigger")[0];

var slider = document.getElementsByClassName("Year_choice")[0];
var arrow = document.getElementsByClassName("Arrow")[0];

trigger.addEventListener("click", function(el){
    if (slider.classList.contains("active")) {
        slider.classList.remove("active");
        arrow.classList.remove("active");
    }
    else {
        slider.classList.add("active");
        arrow.classList.add("active");
    }
});