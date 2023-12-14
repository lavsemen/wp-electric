<?php
    $pageId = get_the_ID();
?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__menu">
                <div class="footer__menu-item">
                    <a href="#section-formula" class="link ">
                        <?= carbon_get_post_meta($pageId, 'promo_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-facts" class="link ">
                        <?=carbon_get_post_meta($pageId, 'facts_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-projects" class="link ">
                        <?=carbon_get_post_meta($pageId, 'projects_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-faq" class="link ">
                        <?=carbon_get_post_meta($pageId, 'questions_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-review" class="link ">
                        <?=carbon_get_post_meta($pageId, 'reviews_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-services" class="link ">
                        <?=carbon_get_post_meta($pageId, 'services_title')?>
         </a>
                </div>
                <div class="footer__menu-item">
                    <a href="#section-gallary" class="link ">
                        <?=carbon_get_post_meta($pageId, 'gallery_title')?>
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
                        <address class="footer__info-contacts-email">
                        <?= carbon_get_theme_option('site_email')?>
            </address>
                    </div>

                </div>
                <div class="footer__socials">
                    <div class="footer__socials-desc">
                        Еще больше танцев в соцсетях!
                    </div>
                    <ul class="socials">
                        <li class="socials__item">
                            <a href="  <?= carbon_get_theme_option('site_vk')?>" aria-label="Переход в телеграмм" target="_blank">

                                <svg class="icon__vk" width="24px" height="26px">
                                    <use xlink:href="svg-symbols.svg#vk"></use>
                                </svg>

                            </a>
                        </li>
                        <li class="socials__item">
                            <a href="  <?= carbon_get_theme_option('site_inst')?>" aria-label="Переход в инстаграмм" target="_blank">

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
