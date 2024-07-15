(function ($) {
  "use strict";
  //
  var i = 0;
  var txt = "Lorem ipsum dolor Adipisicing Elit.";
  var speed = 50;

  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("banner-head").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }

  document.addEventListener("DOMContentLoaded", (event) => {
    typeWriter();
  });
  // mobile menu dropdows
  $(".moblie-dropdwon").on("click", function () {
    var current_dropdown = $(this).next(".dropdown-mb-menu");
    $(".dropdown-mb-menu").not(current_dropdown).slideUp();
    current_dropdown.slideToggle();
    return false;
  });
  //scroll to top button
  var btn = $(".scrollToTop");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });

  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });

  //Service Slider
  //Video Slider
  const swiper3 = new Swiper(".service-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      clickable: true,
      el: ".swiper-pagination",
    },
  });
  //client Slider
  //Video Slider
  const swiper2 = new Swiper(".client-slider", {
    spaceBetween: 50,
    slidesPerView: 'auto',    
    speed:1500,
    spaceBetween: 10,
    loop:true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },

  });
  
  // Odometer JS
	// $(".odometer").each((function(t){$(".odometer").each((function(){var t=$(this).attr("data-count");$(this).html(t)}))}));

  // WOW JS
  if ($(".wow").length) {
    var wow = new WOW({
      mobile: false,
    });
    wow.init();
  }
})(jQuery);
