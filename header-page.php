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
    <title><?= $page_title?></title>
  </head>
<body>
  <div class="mobile-menu">
    <ul class="mobile-menu-nav">
    <li class="mobile-menu-nav-item"><a href="./about.php" class="mobile-menu-link">О компании</a></li>
      <li class="mobile-menu-nav-item"><a href="./contracts.php" class="mobile-menu-link">Контрактное производство</a>
      <ul class="mobile-submenu">
        <li class="mobile-submenu-item">
          <a class="mobile-submenu-link" href="./autochem.php">Автомобильная химия</a>
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
  <nav class="navbar navbar-light">
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
      <li class="header-nav-item"><a href="./about.php" class="header-nav-link">О компании</a></li>
      <li class="header-nav-item"><a href="./contracts.php" class="header-nav-link">Контрактное производство</a></li>
      <li class="header-nav-item"><a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a></li>
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
  <header class="header-section <?= $header_style?>">
  <img src="img/autochem-header-img.png" alt="autochemistry" class="autochem-header-img">
    <div class="container">
      <div class="seporator"></div>
      <h1 class="header-section-title"><?= $page_title?></h1>
      <ul class="header-section-list">
        <li class="header-section-list-item"><a href="./" class="header-section-link">Главная</a></li>
        <li class="header-section-list-item active"><a href="#" class="header-section-link"><?= $page_title?></a></li>
      </ul>
    </div>
    <!-- /.container -->
  </header>
  <!-- /.header -->

  </html>