<div class="page__bottom">
            <footer class="footer">
                <div class="container">
                    <div class="footer__wrapper">
                        <div class="footer__menu">
                            <div class="footer__menu-item">
                                <a href="#section-formula" class="link ">
                         Формула работы
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-facts" class="link ">
                         Работа со мной
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-projects" class="link ">
                         Работы
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-faq" class="link ">
                         F.A.Q
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-review" class="link ">
                         Отзывы
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-services" class="link ">
                         Услуги
                     </a>
                            </div>
                            <div class="footer__menu-item">
                                <a href="#section-form" class="link ">
                         Оставить заявку
                     </a>
                            </div>
                        </div>
                        <div class="footer__content">
                            <div class="footer__info">
                                <div class="footer__info-time">
                                    <?=carbon_get_theme_option('site_worktime')?>
                                </div>

                                <div class="footer__info-contacts">
                                    <a href="tel: <?= carbon_get_theme_option('site_phone')?>" class="footer__info-contacts-phone">
                                    <?= carbon_get_theme_option('site_phone')?>
                        </a>
                                    <a class="footer__info-contacts-email" href="mailto:<?= carbon_get_theme_option('site_email')?>">
                                    <?= carbon_get_theme_option('site_email')?>
                        </a>
                                </div>

                            </div>
                            <div class="footer__socials">
                                <div class="footer__socials-desc">
                                    Еще больше работ в соцсетях!
                                </div>
                                <ul class="socials">
                                    <li class="socials__item">
                                        <a href="  <?= carbon_get_theme_option('site_vk')?>" target="_blank">

                                            <svg class="icon__vk" width="24px" height="26px">
                                                <use xlink:href="svg-symbols.svg#vk"></use>
                                            </svg>

                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a href="  <?= carbon_get_theme_option('site_inst')?>" target="_blank">

                                            <svg class="icon__inst" width="24px" height="26px">
                                                <use xlink:href="svg-symbols.svg#inst"></use>
                                            </svg>

                                        </a>
                                    </li>
                                </ul>
                                <div class="footer__policy">
                                    Сайт разработал <a href="https://vk.com/caaxxxaar">Семен Лаврентьев</a>. Все права защищны. 2021 — <?=date('Y')?>©
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>

        <script>
            svg4everybody();
        </script>
    </body>

</html>
