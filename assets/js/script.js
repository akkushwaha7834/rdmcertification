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
  };

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
  
  const swiper2 = new Swiper(".client-slider", {
    spaceBetween: 50,
    slidesPerView: 'auto',    
    speed:2500,
    spaceBetween: 10,
    loop:true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },

  });
  //certificate-slider

  const swiper1 = new Swiper(".certificate-slider", {
    spaceBetween: 50,
    slidesPerView: '3',    
    speed:3000,
    loop:true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20
    },
  }
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
