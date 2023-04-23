const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const clientLogo = document.querySelector('.clients-logo');
const modal = document.querySelector('.modal ');
const modalToggle = document.querySelectorAll('[data-toggle=modal]');
const modalClose = document.querySelector('.modal-close');
const modalDialog = document.querySelector('.modal-dialog');
const isFront = document.body.classList.contains('front-page');

console.log('adgasgag');


const lightModeOn = (e) => { // перекрашиваем лого в черный цвет
  navbar.classList.add('navbar-light')
};

const lightModeOff = (e) => {    //  перекрашиваем лого в белый цвет
  navbar.classList.remove('navbar-light')
};

const changeNavHeight = (height) => {  // меняем высоту navbar
  navbar.style.height = height;
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
  this.scrollY >1 ? changeNavHeight('4.5rem') : changeNavHeight('5.875rem')
  if (isFront) {
    this.scrollY >1 ? lightModeOn() : lightModeOff()
  }
});

mMenuToggle.addEventListener('click', (e) => {
  e.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
});

document.addEventListener('click', e => {
  if (
    e.target.dataset.toggle == 'modal' || 
    e.target.parentNode.dataset.toggle == 'modal' ||
    modal.classList.contains('is-open') && !e.composedPath().includes(modalDialog)
    ) {
      e.preventDefault();
      modal.classList.toggle('is-open');
    }
})

document.addEventListener('keyup', e => {
  if (e.key == 'Escape' && modal.classList.contains('is-open')) {
    modal.classList.toggle('is-open')
  }
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

const swiperBlog = new Swiper('.blog-slider', {
  speed: 400,
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-button-next',
    prevEl: '.blog-button-prev',
  },
  breakpoints: {
    // when window width is >= 576px
    375: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
  }
});

const forms = document.querySelectorAll('form');
forms.forEach(form => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
});
validation
  .addField('[name=username]', [
    {
      rule: 'required',  // дб обязательно заполнено
      errorMessage: 'Укажите имя',
    },
    {
      rule: 'maxLength',
      value: 50,
      errorMessage: 'Максимально 30 символов ',
    },
  ])
  .addField('[name=userphone]', [
    {
      rule: 'required',
      errorMessage: 'Укажите телефон',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData =  new FormData(thisForm);
    console.log(1);

    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute('action'), {
        method: thisForm.getAttribute('action'),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          alert('Заявка отправлена')
        } else {
          alert("Текст ошибки: " . response.statusText)
        }
      })
    };
    ajaxSend(formData);
  });
});

