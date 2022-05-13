
// ---------------carousel-----------------

(function () {
  "use strict";

  var carousels = function(){
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          // loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

// ---------------slider----------------
let slide_left_btn = document.getElementById('slide-left')
let slide_right_btn = document.getElementById('slide-right')

let left_slider = document.getElementById('left_slider')
let right_slider = document.getElementById('right_slider')

let num_of_slides = right_slider.querySelectorAll('.slide').length
let current_slide = 1;

slide_left_btn.addEventListener('click', function(e) {
  slide_left()
})

slide_right_btn.addEventListener('click', function(e) {
  slide_right()
})

function slide_left(){

  if (current_slide === 1) {
    current_slide = 3
  } else {
    current_slide--
  }

  document.querySelectorAll('.slide').forEach(function(slide) {
    slide.style.transform = `translateX(-${(current_slide - 1) * 100}%)`
  })
}

function slide_right(){

  if (current_slide === num_of_slides) {
    current_slide = 1
  } else {
    current_slide++
  }

  document.querySelectorAll('.slide').forEach(function(slide) {
    slide.style.transform = `translateX(-${(current_slide - 1) * 100}%)`
  })
}

let auto = setInterval(function(){
  slide_right()
}, 5000);

// -------------------------------------

  
  