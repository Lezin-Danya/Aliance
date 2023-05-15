const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.logo-svg use');
const mMenuToggle = document.querySelector('.mobile-menu-toggle');
const menu = document.querySelector('.mobile-menu');
const clientLogo = document.querySelector('.clients-logo');
const modalToggle = document.querySelectorAll('[data-toggle=modal]');
const modalClose = document.querySelector('.modal-close');
const isFront = document.body.classList.contains('front-page');
const isComapny = document.querySelector('.header-section-title');
const swiperItem = document.querySelectorAll('.header-features-item');
const pageSliderCard = document.querySelectorAll('.page-slider-card');
const cta = document.querySelector('.cta');


let currentModal;  // текущее модальное окно
let modalDialog;  // белое диалоговое окно
let alertModal = document.querySelector('#alert-modal'); // окно с предупреждением
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели модальных окон

modalButtons.forEach(item => {   // клик по переключателю
  item.addEventListener('click', e=> {
    e.preventDefault();
    // определяем текущее открытое окно
      currentModal = document.querySelector(item.dataset.target); 
      // открываем текущее окно
      currentModal.classList.toggle('is-open');
      // назаначаем текущее диалоговое окно
      modalDialog = currentModal.querySelector('.modal-dialog');
      currentModal.addEventListener('click', event => {
        if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove('is-open');
       };
      });
  });
});

document.addEventListener('keyup', e => {
  if (e.key == 'Escape' && currentModal.classList.contains('is-open')) {
    currentModal.classList.toggle('is-open')
  }
});

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
};

window.addEventListener('scroll', ()=> {
  this.scrollY >1 ? changeNavHeight('4.5rem') : changeNavHeight('5.875rem')
  if (isFront) {
    this.scrollY >1 ? lightModeOn() : lightModeOff()
  }
});

// красим текст слайдера в черный
if (isComapny) {  
  swiperItem.forEach(i => {
    i.style.color = '#000'
  })
};

// скрываем секцию 
if (isComapny && isComapny.textContent == "Политика конфиденциальности") {
  cta.style.display = 'none';
}

// показываем картинку в хедере 
const autochemImg = document.querySelector('.autochem-header-img');

if (isComapny && isComapny.textContent == "Автомобильная химия") {
  autochemImg.style.display = "block";
}


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
});

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

const swiperSectionBlog = new Swiper('.page-blog-slider', {
  centeredSlides: true,
  loop: true,
  speed: 400,
  slidesPerView: 3,
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
    const thisForm = event.target;  // наша форма
    const formData =  new FormData(thisForm); // данные из формы
    console.log('форма отправлена');

    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute('action'), {
        method: thisForm.getAttribute('method'),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          console.log('статус ok');
          thisForm.reset();
           if  (currentModal ) {
            currentModal.classList.remove('is-open') 
          };
          alertModal.classList.add('is-open');
          currentModal = alertModal;
          modalDialog = currentModal.querySelector('.modal-dialog');
          currentModal.addEventListener('click', event => {
            if (!event.composedPath().includes(modalDialog)) {
            currentModal.classList.remove('is-open');
           };
          });
          } else {
            alert("Текст ошибки: " . response.statusText)
          }
      });
    };
    ajaxSend(formData);
  });
});

// МАСKА ТЕЛЕФОНА
/* Создаем префикс +7, даже если вводят 8 или 9 */	
const prefixNumber = (str) => {	
  /* если вводят семерку, добавляем ей скобку */	
  if (str === "7") {	
    return "7 (";	
  }	
  /* если вводят восьмерку, ставим вместо нее +7 ( */	
  if (str === "8") {	
    return "+7 (";	
  }	
  /* если пишут девятку, заменяем на +7 (9  */	
  if (str === "9") {	
    return "7 (9";	
  }	
  /* в других случаях просто 7 (  */	
  return "7 (";	
}; /* профикс в любом раскладе будет +7 () */	

/* Ловим события ввода в любом поле */	
document.addEventListener("input", (e) => {	
  /* Проверяем, что это поле имеет класс phone-mask */	
  if (e.target.classList.contains("phone-mask")) {	
    /* поле с телефоном помещаем в переменную input */	
    const input = e.target;	
    /* вставляем плюс в начале номера */	
    const value = input.value.replace(/\D+/g, "");	
    /* длинна номера 11 символов */	
    const numberLength = 11;	

    /* Создаем переменную, куда будем записывать номер */	
    let result;	
    /* Если пользователь ввел 8... */	
    if (input.value.includes("+8") || input.value[0] === "8") {	
      /* Стираем восьмерку */	
      result = "";	
    } else {	
      /* Оставляем плюсик в поле */	
      result = "+";	
    }	

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */	
    for (let i = 0; i < value.length && i < numberLength; i++) {	
      switch (i) {	
        case 0:	
          /* в самом начале ставим префикс +7 ( */	
          result += prefixNumber(value[i]);	
          continue;	
        case 4:	
          /* добавляем после "+7 (" круглую скобку ")" */	
          result += ") ";	
          break;	
        case 7:	
          /* дефис после 7 символа */	
          result += "-";	
          break;	
        case 9:	
          /* еще дефис  */	
          result += "-";	
          break;	
        default:	
          break;	
      }	
      /* на каждом шаге цикла добавляем новую цифру к номеру */	
      result += value[i];	
    }	
    /* итог: номер в формате +7 (999) 123-45-67 */	
    input.value = result;	
  }	
});
