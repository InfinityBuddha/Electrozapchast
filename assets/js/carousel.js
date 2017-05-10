(function() {
  var slides = document.querySelectorAll('.carousel__slide');
  var slideInit = document.querySelector('.carousel__slide:nth-child(1)');
  var slideInterval = setInterval(slideShow, 1000);
  var slideNav = document.querySelectorAll('.carousel__nav-item');
  var slideNavInit = document.querySelector('.carousel__nav-item:nth-child(1)');

  var slideShow = function() {
    slides[currentSlide].className = 'carousel__slide';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].className = 'carousel__slide carousel__slide--showing';
  }

  var init = function() {
    slideNavInit.classList.add('carousel__nav-item--active');
    slideInit.classList.add('carousel__slide--showing');
    for (var i = 0; i < slideNav.length; i++) {
      var link = slideNav[i];
      handleClick(link, i);
    }
  }

  var handleClick = function(link, index) {
    link.addEventListener('click', function() {
      removeActiveClass();
      goToSlide(index);
    })
  }

  var removeActiveClass = function() {
    var activeSlide = document.querySelector('.carousel__slide--showing');
    activeNav = document.querySelector('.carousel__nav-item--active');

    activeNav.classList.remove('carousel__nav-item--active');

    if (activeSlide) {
      activeSlide.classList.remove('carousel__slide--showing');
    }
  }

  var goToSlide = function(index) {
    slideNav[index].classList.add('carousel__nav-item--active');
    slides[index].classList.add('carousel__slide--showing');
  }

  init();
})();



