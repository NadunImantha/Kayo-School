var swiper1 = new Swiper('.swiper-news-home', {
  slidesPerView: 1,
  observer: true,
  observeParents: true,
  observeSlideChildren: true,
  breakpoints: {
      568: {
          slidesPerView: 'auto',
      }
  },
  // centeredSlides: true,
  // spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper2 = new Swiper('.swiper-testi-home', {
  slidesPerView: 1,
  observer: true,
  observeParents: true,
  centeredSlides: true,
  autoHeight: true,
  observeSlideChildren: true, breakpoints: {
    769: {
        slidesPerView: 'auto',
    }
},
  
  // centeredSlides: true,
  // spaceBetween: 30,

  navigation: {
    nextEl: '#SBN-HT',
    prevEl: '#SBP-HT',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

var swiper3 = new Swiper('.top-hero-slider', {
  scrollbar: {
    el: '.swiper-scrollbar',
    observer: true,
    observeParents: true,
    observeSlideChildren: true,
    // autoplay: false,
    // hide: true,
  }, 
  autoplay: {
    delay: 6000,
  },
  pagination: {
    el: '.swiper-pagination-fraction',
    type: 'fraction',
  },
});


var swiper1 = new Swiper('.swiper-jobs-wt-we', {
  // slidesPerView: 'auto',

  slidesPerView: 1,
  observer: true,
  observeParents: true,
  observeSlideChildren: true,
  breakpoints: {
      576: {
          slidesPerView: 3,
      }
  },
  // centeredSlides: true,
  // spaceBetween: 30,
  // never double
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '#SBN-PT',
    prevEl: '#SBP-PT',
  },

});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
