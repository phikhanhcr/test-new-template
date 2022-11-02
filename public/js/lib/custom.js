"use strict";
$(document).ready(function() {
    $("select").niceSelect();

    AOS.init({
        once: true,
    });
});
window.addEventListener("load", AOS.refresh);

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
      Counter Up Activation
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
$(".counter").counterUp({
    delay: 10,
    time: 1000,
});

/*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
      Slick Slider Activation
  <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/
$(".slick-slider").slick();
if (jQuery(".testimonil-slider--01").length > 0) {
    $(".testimonil-slider--01")
        .not(".slick-initialized")
        .slick({
            dots: false,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            prevArrow: $(".testimonil-slider--01__control-buttons .button--prev"),
            nextArrow: $(".testimonil-slider--01__control-buttons .button--next"),
        });
}
if (jQuery(".testimonil-slider--02").length > 0) {
    $(".testimonil-slider--02").not(".slick-initialized").slick({
        dots: true,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
    });
}
if (jQuery(".testimonial-slider--03").length > 0) {
    $(".testimonial-slider--03")
        .not(".slick-initialized")
        .slick({
            dots: true,
            infinite: true,
            autoplay: true,
            speed: 800,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                    },
                },
            ],
        });
}
if (jQuery(".testimonial-slider--04").length > 0) {
    $(".testimonial-slider--04")
        .not(".slick-initialized")
        .slick({
            dots: false,
            infinite: true,
            speed: 800,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            prevArrow: $(".testimonial-slider--04__control-buttons .button--prev"),
            nextArrow: $(".testimonial-slider--04__control-buttons .button--next"),
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                    },
                },
            ],
        });
}
if (jQuery(".testimonial-slider--05").length > 0) {
    $(".testimonial-slider--05")
        .not(".slick-initialized")
        .slick({
            dots: true,
            infinite: true,
            autoplay: false,
            speed: 800,
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                    },
                },
            ],
        });
}
if (jQuery(".testimonial-slider--06").length > 0) {
    $(".testimonial-slider--06")
        .not(".slick-initialized")
        .slick({
            dots: false,
            infinite: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            prevArrow: $(".testimonial-slider--06__control-buttons .button--prev"),
            nextArrow: $(".testimonial-slider--06__control-buttons .button--next"),
            responsive: [{
                breakpoint: 768,
                settings: {
                    dots: true,
                },
            }, ],
        });
}
if (jQuery(".testimonil-slider--06").length > 0) {
    $(".testimonil-slider--06").not(".slick-initialized").slick({
        dots: true,
        vertical: true,
        infinite: true,
        speed: 800,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
}
if (jQuery(".screenshot-slider").length > 0) {
    $(".screenshot-slider")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            centerMode: true,
            centerPadding: "130px",
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            easing: "linear",
            speed: 800,
            appendDots: ".screenshots-dots",
            responsive: [{
                    breakpoint: 1800,
                    settings: {
                        slidesToShow: 5,
                        centerPadding: "100px",
                    },
                },
                {
                    breakpoint: 1750,
                    settings: {
                        slidesToShow: 5,
                        centerPadding: "20px",
                    },
                },
                {
                    breakpoint: 1670,
                    settings: {
                        slidesToShow: 5,
                        centerPadding: "60px",
                    },
                },
                {
                    breakpoint: 1640,
                    settings: {
                        slidesToShow: 5,
                        centerPadding: "20px",
                    },
                },
                {
                    breakpoint: 1450,
                    settings: {
                        slidesToShow: 5,
                        centerPadding: "10px",
                    },
                },
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "20px",
                    },
                },
                {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "10px",
                    },
                },
                {
                    breakpoint: 1150,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0px",
                    },
                },
                {
                    breakpoint: 1050,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "10px",
                    },
                },
                {
                    breakpoint: 950,
                    settings: {
                        slidesToShow: 3,
                        centerPadding: "0",
                    },
                },
                {
                    breakpoint: 830,
                    settings: {
                        fade: true,
                        slidesToShow: 1,
                        centerPadding: "20px",
                    },
                },
                {
                    breakpoint: 650,
                    settings: {
                        fade: true,
                        slidesToShow: 1,
                        centerPadding: "10px",
                    },
                },
                {
                    breakpoint: 515,
                    settings: {
                        fade: true,
                        slidesToShow: 1,
                        autoplay: true,
                        centerPadding: "0px",
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        fade: true,
                        slidesToShow: 1,
                        autoplay: true,
                        centerPadding: "0px",
                        arrows: false,
                    },
                },
            ],
        });
}
if (jQuery(".portfolio-details-slider--01").length > 0) {
    $(".portfolio-details-slider--01")
        .not(".slick-initialized")
        .slick({
            dots: false,
            infinite: true,
            speed: 900,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            prevArrow: $(
                ".portfolio-details-slider--01__control-buttons .button--prev"
            ),
            nextArrow: $(
                ".portfolio-details-slider--01__control-buttons .button--next"
            ),
            responsive: [{
                breakpoint: 768,
                settings: {
                    dots: true,
                },
            }, ],
        });
}

// portfolio-details-03 slider Start
if (jQuery(".portfolio-details-slider--for").length > 0) {
    $(".portfolio-details-slider--for").not(".slick-initialized").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".portfolio-details-slider--nav",
    });
}
if (jQuery(".portfolio-details-slider--nav").length > 0) {
    $(".portfolio-details-slider--nav").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".portfolio-details-slider--for",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        arrows: true,
        prevArrow: $(
            ".portfolio-details-slider--nav__control-buttons .button--prev"
        ),
        nextArrow: $(
            ".portfolio-details-slider--nav__control-buttons .button--next"
        ),
        responsive: [{
            breakpoint: 768,
            settings: {
                dots: true,
            },
        }, ],
    });
}
$(".price-deck-trigger").on("change", function(e) {
    // $(e.target).addClass("active").siblings().removeClass("active");
    var target = $(e.target).attr("data-target");
    // console.log($(target).attr("data-value-active") == "monthly");
    if ($(target).attr("data-value-active") == "monthly") {
        $(target).attr("data-value-active", "yearly");
    } else {
        $(target).attr("data-value-active", "monthly");
    }
});

// /*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//       Preloader Activation
// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<*/

$(window).load(function() {
    setTimeout(function() {
        $("#loader").fadeOut(500);
    }, 1000);
    setTimeout(function() {
        $("#loader").remove();
    }, 2000);
});

//***ISOTOPE***
// Portfolio-01
$(window).load(function() {
    $(".portfolio-active").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows",
    });
});

// filter items on button click
$(".portfolio-filter-menu").on("click", "button", function() {
    var filterValue = $(this).attr("data-filter");
    $(".portfolio-active").isotope({
        filter: filterValue
    });
});

$(".slider-arrow-click-active .slick-arrow").on("click", function(e) {
    if (!$(this).hasClass("active")) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    }
});

// Portfolio Menu Activation
// Get the container element
var btnContainer = document.getElementById("portfoliogridMenu");
var btns = document.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}

function passowrdVisibility(passwrodField, button) {
    let passField = document.querySelector(passwrodField);
    let icon = document.querySelector(button);
    if (icon !== null && passField !== null) {
        icon.addEventListener("click", () => {
            if (passField.type === "password") {
                passField.type = "text";
                icon.classList.add("fa-eye");
                icon.classList.remove("fa-eye-slash");
            } else {
                passField.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        });
    }
}

passowrdVisibility("#passField", "#eye");

// Countdown Timer
// var countDownDate = new Date("31 April 2022 12:12:10").getTime() / 1000;
// setInterval(()=>{
//   var now = new Date().getTime() / 1000;
//   var diff = countDownDate - now;
//   var day = Math.floor(diff / (60 * 60 * 24));
//   var hours = Math.floor((diff % (60 * 60 * 24)) / (60 * 60));
//   var min = Math.floor((diff % (60 * 60)) / 60);
//   var sec = Math.floor(diff % 60);
//   document.getElementById("days").innerHTML = day;
//   document.getElementById("hours").innerHTML = hours;
//   document.getElementById("minutes").innerHTML = min;
//   document.getElementById("seconds").innerHTML = sec;
// }, 1000);