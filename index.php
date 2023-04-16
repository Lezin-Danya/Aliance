<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item"><a href="/about.html" class="mobile-menu-link">О компании</a></li>
        <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Контрактное производство</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
      </li>
        <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Собственные торговые марки</a></li>
        <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Новости</a></li>
        <li class="mobile-menu-nav-item"><a href="#" class="mobile-menu-link">Контакты</a></li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+74996861014</a>
      <div class="mobile-info">
        <svg width="16" height="12" class="adress-logo">
          <use href="img/sprite.svg#location"></use>
          </svg>
          <adress class="mobile-info-adress">г. Мосвка, Холодильный пер. 4к1с8</adress>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg width="16" height="12" class="mail-logo">
          <use href="img/sprite.svg#mail"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">гa.dragunov@tdaliance.ru</a>
      </div>
      <!-- /.mobile-info -->
    </div>
    <nav class="navbar">
      <a href="" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
          </svg>
          <svg class="logo-svg logo-dark">
            <use href="img/sprite.svg#logo-dark"></use>
            </svg>
      </a> 
      <ul class="header-nav">
        <li class="header-nav-item"><a href="/about.html" class="header-nav-link">О компании</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Контрактное производство</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Собственные торговые марки</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Новости</a></li>
        <li class="header-nav-item"><a href="#" class="header-nav-link">Контакты</a></li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
          </svg>
        <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal">
        <span class="button-text">Получить консультацию</span>
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
          </svg>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image"> 
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
          <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
          <button class="header-button button" data-toggle="modal">Подробнее о компании</button>
        </div>
        <!-- /.header-content --> 
        <!--Основной блок слайдера -->
      <div class="swiper">
        <!-- Обертка слайдера -->
        <ul class="swiper-wrapper header-features">
          <!-- Слайды -->
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
            <use href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
        </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
            <use href="img/sprite.svg#certificate"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p>
        </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#quality"></use>
              </svg>
              <p class="header-features-text">Контроль качества на всех этапах</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">Возможны поставки по всей России</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use href="img/sprite.svg#manufacture"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
          </li>
        </ul>
        <!-- кнопки навигации -->
        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
          </div>
          <div class="slider-button-next">
            <svg width="36" height="24">
              <use href="img/sprite.svg#arrow-next"></use>
              </svg>
          </div>
        </div>
        <!-- /.slider-buttons -->
      </div>
      </div>
      <!-- /.container -->
    </header>
    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>
        <!-- Slider main container -->
        <div class="swiper slider-steps">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</p>
            </li>
          </ol>
          <div class="steps-buttons primary-buttons-wrapper">
            <div class="steps-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-prev"></use>
                </svg>
            </div>
            <div class="steps-button-next primary-button-next">
              <svg width="36" height="24">
                <use href="img/sprite.svg#arrow-next"></use>
                </svg>
            </div>
          </div>
          <!-- /.stepts-button -->
        </div>
        <!-- Slider main container -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section section-light -->

    <section class="section production">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="cards">
          <div class="card">
            <div class="card-content">
              <h3 class="card-title">Автомобильная химия</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
            </div>
            <img src="img/0503577001614868834 1-1.png" alt="" class="card-image">
          </div>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Бытовая химия</h3>
              <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </div>
            <img src="img/Без имени-2 1.png" alt="" class="card-image">
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Дезинфицирующие средства</h3>
              <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </div>
            <img src="img/5dd4c227c7dc6914837490 1-1.png" alt="" class="card-image">
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Пищевые аэрозоли</h3>
              <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
            </div>
            <img src="img/5dd4c227c7dc6914837490 1.png" alt="" class="card-image">
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Косметическая продукция</h3>
              <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </div>
            <img src="img/0503577001614868834 1.png" alt="" class="card-image">
          </a>
          <a href="#" class="card">
            <div class="card-content">
              <h3 class="card-title">Краски аэрозольные</h3>
              <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </div>
            <img src="img/Без имени-2 1.png" alt="" class="card-image">
          </a>
        </div>
        <!-- /.cards-->
      </div>
          <!-- /. container -->
    </section>
    <!-- /.section production -->
    <section class="section trademark">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">собственные торговые марки</h2>
        <div class="trademark-cards">
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="img/sprite.svg#AGTECH"></use>
              </svg>
            <h3 class="trademark-card-title">Автохимия AG-Tech</h3>
            <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
          <div class="trademark-card">
            <svg class="trademark-card-logo">
              <use href="img/sprite.svg#AP"></use>
              </svg>
            <h3 class="trademark-card-title">Автохимия AP</h3>
            <p class="trademark-card-text">Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.</p>
          </div>
        </div>
        <!-- /.trademark-cards -->   
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section trademark -->
    <section class="section founder">
      <img class="founder-photo" src="img/founder.jpg" alt="founder">
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title">Отношение к делу и к клиентам</h2>
            <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.</p>
              <p class="founder-text">             
                 А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.</p>
              <a href="#" class="button-link">О нашей миссии</a>
          </div>
          <!-- /.founder-content -->
        </div>
        <!-- /.founder-content-wrapper -->
      </div>
    </section>
    <!-- /.section founder -->
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
            <ul class="client-list">
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#him"></use>
              </svg>
              Химические производства
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#car"></use>
              </svg>
              Автомойки
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#eat"></use>
              </svg>
              Пищевая продукция
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#brush"></use>
              </svg>
              Лаки и краски
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#cosmetic"></use>
              </svg>
              Косметические средства
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#car-cosm"></use>
              </svg>
              Автомобильная косметика
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#shirt"></use>
              </svg>
              Косметика по уходу за одеждой
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#boots"></use>
              </svg>
              Косметика по уходу за обувью
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#bricks"></use>
              </svg>
              Строительные материалы
              </li>
              <li class="client-list-item">
                <svg width="30" height="30" class="client-list-icon">
              <use href="img/sprite.svg#more"></use>
              </svg>
              И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
            <a href="#" class="clients-logo-item"><img src="img/client.png" alt="" class="clients-logo">
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section-clients -->
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a herf="#" class="swiper-slide blog-card">
              <img src="img/blog/blog-photo.jpg" alt="" class="blog-card-image">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a herf="#" class="swiper-slide blog-card">
              <img src="img/blog/blog-post.jpg" alt="" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
            <a herf="#" class="swiper-slide blog-card">
              <img src="img/blog/blog-post.jpg" alt="" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-buttons primary-buttons-wrapper">
              <div class="blog-button-prev primary-button-prev">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#arrow-prev"></use>
                  </svg>
              </div>
              <div class="blog-button-next primary-button-next">
                <svg width="36" height="24">
                  <use href="img/sprite.svg#arrow-next"></use>
                  </svg>
              </div>
            </div>
            <!-- /.blog-button -->
          </div>
          <!-- /.blog-slider-footer -->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section blog -->
    <section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="#" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input" placeholder=" ">
                <label for="user-name" class="input-group-label">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input id="user-phone" type="tel" class="input" placeholder=" ">
                <label for="user-phone" class="input-group-label">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button">Отправить заявку</button>
              <div class="notify">
                <svg width="14" height="14" class="notify-icon">
                  <use href="img/sprite.svg#shield"></use>
                  </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
            </div>
            <!-- /.cta-form-footer -->
          </form>
          <!-- /.cta-form -->
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
    </section>
    <!-- /.cta -->
    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <svg class="logo-svg footer-logo">
            <use href="img/sprite.svg#logo-black"></use>
            </svg>
            <a href="Tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
            <div class="footer-info">
              <svg width="16" height="16" class="adress-logo">
                <use href="img/sprite.svg#location"></use>
                </svg>
                <adress class="footer-info-adress">г. Мосвка, Холодильный пер. 4к1с8</adress>
            </div>
            <!-- /.footer-info -->
            <div class="footer-info">
              <svg width="16" height="12" class="mail-logo">
                <use href="img/sprite.svg#mail"></use>
                </svg>
                <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
            </div>
            <!-- /.footer-info -->
            <div class="footer-social">
              <a href="#" class="footer-social-link">
                <svg class="footer-social-icon" width="24" height="24">
                  <use href="img/sprite.svg#vk"></use>
                  </svg>
              </a>
              <a href="#" class="footer-social-link">
                <svg class="footer-social-icon" width="24" height="24">
                  <use href="img/sprite.svg#inst"></use>
                  </svg>
              </a>
            </div>
            <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-seporator">
      <!-- /.container -->
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автомобильная химия</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Бытовая химия</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Дезинфицирующие средства</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Пищевые аэрозоли</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Косметическая продукция</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Краски аэрозольные</a></li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AG-Tech</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AP</a></li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-last">
              <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a></li>
              <li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a></li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
      </div>
      <!-- /.container -->
      <hr class="footer-seporator">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">
              &#169; <?php echo date('.d.m.y')?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="51" height="11" class="footer-social-icon" width="24" height="24">
              <use href="img/sprite.svg#ruso"></use>
              </svg>
          </div>
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal">
          <svg width="51" height="11" class="close-icon" width="24" height="24" data-toggle="modal">
            <use href="img/sprite.svg#close"></use>
            </svg>
        </a>
        <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="#" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
              <label for="modal-user-name" class="input-group-label modal-input-label">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
              <label for="modal-user-phone" class="input-group-label modal-input-label">Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">Отправить заявку</button>
            <div class="notify">
              <svg width="14" height="14" class="notify-icon">
                <use href="img/sprite.svg#shield"></use>
                </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.modal-form-footer -->
        </form>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>