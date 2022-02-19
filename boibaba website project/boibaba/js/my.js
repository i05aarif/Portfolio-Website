AOS.init();


$('.slick-single-item').slick({
  autoplay: true,
    nextArrow:'<span class=""><i class="fas fa-angle-right next_slider"></i></span>',
    prevArrow:'<span class=""><i class="fas fa-angle-left pre_slider"></i></span>',
});
$('.nav_slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
   nextArrow:'<span class=""></span>',
    prevArrow:'<span class=""></span>',
});



$('.center').slick({
  centerMode: true,
  centerPadding: '5px',
  nextArrow:'<span class=""><i class="fas fa-angle-right next_slider_center"></i></span>',
    prevArrow:'<span class=""><i class="fas fa-angle-left pre_slider_center"></i></span>',
  slidesToShow: 6,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '5px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '5px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '5px',
        slidesToShow: 2
      }
    },
     {
      breakpoint: 344,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '5px',
        slidesToShow: 1
      }
    }
  ]

});
$('.slick-single-sidebar').slick({
  autoplay: true,
    nextArrow:'<span class=""><i class="fas fa-angle-right next_slider_sidebar"></i></span>',
    prevArrow:'<span class=""><i class="fas fa-angle-left pre_slider_sidebar"></i></span>',
});


$(document).ready(function(){
  $(".main_cat_title").click(function(){
    $(".main_sidebar_content").toggle();
  });
});


//Get the button
var mybutton = document.getElementById("go_top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}