$(document).ready(function() {
  
  // Debounce function to improve scroll event performance
  function debounce(func, wait = 10, immediate = true) {
      let timeout;
      return function() {
          const context = this, args = arguments;
          const later = function() {
              timeout = null;
              if (!immediate) func.apply(context, args);
          };
          const callNow = immediate && !timeout;
          clearTimeout(timeout);
          timeout = setTimeout(later, wait);
          if (callNow) func.apply(context, args);
      };
  }


  // Scroll event with debounce
  $(window).scroll(debounce(function() {
    if ($(window).scrollTop() > 10) {
      $('.navbar').addClass('sticky');
    } else {
      $('.navbar').removeClass('sticky');
    }

    if (this.scrollY > 500) {
      $('.scroll-up-btn').addClass("show");
    } else {
      $('.scroll-up-btn').removeClass("show");
    }
  }, 15)); 

  // Smooth scroll to top when scroll-up button is clicked
  $('.scroll-up-btn').click(function() {
    $('html, body').animate({scrollTop: 0}, 'slow'); // Smooth scroll to top
  });

  // Toggle menu/navbar script
  $('.menu-btn').on('click', () => {
    $('.navbar .menu').toggleClass("active");
    $('.menu-btn i').toggleClass("active");
  });


  // typing animation
  var typed = new Typed(".typing",{
      strings: ["Web Designer", "UI-UX Designer","Full Stack Developer", "Fresher"],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
    });
  
    var typed = new Typed(".typing-2",{
      strings: ["Web Designer", "UI-UX Designer","Full Stack Developer", "Fresher"],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
    });

  
  // Owl carousel initialization with customization
  $('.carousel').owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 1000, 
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: false
      }
    }
  });
});