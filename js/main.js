const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const clientLogo = document.querySelector('.clients-logo');

const lightModeOn = (e) => { // перекрашиваем лого в черный цвет
  navbar.classList.add('navbar-light')
  logo.href.baseVal = 'img/sprite.svg#logo'
}

const lightModeOff = (e) => {    //  перекрашиваем лого в белый цвет
  navbar.classList.remove('navbar-light')
  logo.href.baseVal = 'img/sprite.svg#logo-light'
}

const openMenu = (e) => {  // открытие меню
  menu.classList.add('is-open');
  document.body.style.overflow='hidden';
  mMenuToggle.classList.add('close-menu');
  lightModeOn();
}

const closeMenu = (e) => {  // закрытие меню
  menu.classList.remove('is-open');
  document.body.style.overflow='';
  mMenuToggle.classList.remove('close-menu');
  lightModeOff();
}

window.addEventListener('scroll', ()=> {
  this.scrollY >1 ? lightModeOn() : lightModeOff()
});

mMenuToggle.addEventListener('click', (e) => {
  e.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

const swiperSteps = new Swiper('.slider-steps', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.steps-button-next',
    prevEl: '.steps-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1200
    1024: {
      slidesPerView: 4,
    }

  }
})

const swiper = new Swiper('.swiper', {
  speed: 400,
  slidesPerView: 1,
  navigation: {
    nextEl: '.slider-button-next',
    prevEl: '.slider-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    576: {
      slidesPerView: 2,
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1200
    1024: {
      slidesPerView: 4,
    },
    1200: {
      slidesPerView: 5,
    }
  }

});


