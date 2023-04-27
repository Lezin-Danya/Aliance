<section class="cta">
      <div class="bg-grey section-cta">
        <img src="img/cta.png" alt="call to action" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input id="user-name" type="text" class="input" name="username" placeholder=" " maxlength="100">
                <label for="user-name" class="input-group-label">Имя</label>
              </div>
              <!-- /.input-group -->
              <div class="input-group">
                <input id="user-phone" type="tel" class="input phone-mask" name="userphone" placeholder=" " maxlength="30">
                <label for="user-phone" class="input-group-label">Номер телефона</label>
              </div>
              <!-- /.input-group -->
            </div>
            <!-- /.input-group-wrapper -->
            <div class="cta-form-footer">
              <button type="submit" class="button cta-form-button phone-mask">Отправить заявку</button>
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
            <a href="Tel:+79996861014" class="footer-phone">+7 (999) 686-10-14</a>
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
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
          <svg width="51" height="11" class="close-icon" width="24" height="24" data-toggle="modal">
            <use href="img/sprite.svg#close"></use>
            </svg>
        </a>
        <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <form action="handler.php" method="POST" class="modal-form">
          <div class="input-group-wrapper input-group-vertical">
            <div class="input-group modal-input-group">
              <input id="modal-user-name" type="text" class="input modal-input" placeholder=" " name="username">
              <label for="modal-user-name" class="input-group-label modal-input-label">Имя</label>
            </div>
            <!-- /.input-group -->
            <div class="input-group modal-input-group">
              <input id="modal-user-phone" type="tel" class="input modal-input phone-mask" placeholder=" " name="userphone">
              <label for="modal-user-phone" class="input-group-label modal-input-label">Номер телефона</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button phone-mask">Отправить заявку</button>
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
    <div class="modal" id="alert-modal">
      <div class="modal-dialog">
        <svg width="360" height="310">
            <use href="img/sprite.svg#thanks-modal"></use>
          </svg>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <a href="" class="modal-close" data-toggle="modal" data-target="#alert-modal">
          <svg class="close-icon" width="24" height="24" data-toggle="modal" data-target="#alert-modal">
            <use href="img/sprite.svg#close"></use>
          </svg>
        </a>
        <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <button type="submit" class="button modal-form-button phone-mask">Отправить заявку</button>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>