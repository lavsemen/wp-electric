<!DOCTYPE html>
<html lang="ru">
<?php
$SEO_TITLE = 'UpYouGo: Школа танцев в Москве c опытными преподавателями и разнообразными Направлениями!';
$SEO_DESCRIPTION = 'Откройте для себя мир танца с московской школой UpYouGo! Мы предлагаем разнообразные танцевальные направления, включая бачату, кизомбу и сальсу. Наши опытные преподаватели помогут вам освоить новые движения и улучшить свою технику. Присоединяйтесь к UpYouGo и погрузитесь в мир ярких впечатлений и положительных эмоций!';
$SEO_IMAGE = get_site_url() . '/wp-content/themes/electric/static/img/content/logo.png';
$pageId = get_the_ID();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="yandex-verification" content="760865e2ae86c8f7" />
    <title><?=$SEO_TITLE?></title>
    <meta content="<?=$SEO_DESCRIPTION?>" name="description">
    <meta property="og:title" content="<?=$SEO_TITLE?>" />
    <meta property="og:description" content="<?=$SEO_DESCRIPTION?>" />
    <meta property="og:image" content="<?=$SEO_IMAGE?>" />
    <meta property="og:type" content="video">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="telephone=no" name="format-detection">
    <!-- This make sence for mobile browsers. It means, that content has been optimized for mobile browsers -->
    <meta name="HandheldFriendly" content="true">


    <!--[if (gt IE 9)|!(IE)]><!-->

    <!--<![endif]-->


    <link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/static/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=get_template_directory_uri()?>/static/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/static/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/static/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/static/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=get_template_directory_uri()?>/static/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=get_template_directory_uri()?>/static/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <script src="https://api-maps.yandex.ru/v3/?apikey=0a58bf95-7483-40a8-84a1-8649763991dc&lang=ru_RU"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(95868871, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/95868871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <script>
        initMap();

        async function initMap() {
            await ymaps3.ready;

            const {YMap, YMapDefaultSchemeLayer, YMapDefaultFeaturesLayer, YMapMarker} = ymaps3;

            const map = new YMap(
                document.getElementById('map'),
                {
                    location: {
                        center: [37.681326, 55.767509],
                        zoom: 17
                    }
                }
            );

            map.addChild(new YMapDefaultSchemeLayer());
            map.addChild(new YMapDefaultFeaturesLayer());

            const content = document.createElement('section');
            content.classList.add('marker');

            const marker = new YMapMarker(
                {
                    coordinates: [37.681326, 55.7677],
                },
                content
            );

            map.addChild(marker);
            content.innerHTML = '<img style="width: 70px; height: 70px" src="<?=$SEO_IMAGE?>"/>'
        }
    </script>
    <?php wp_head()?>
</head>

<body class="page">
<div class="page__content">
    <header class="header">
        <div class="container">
            <div class="header__items">
                <div class="header__logo">
                    <img src="/wp-content/themes/electric/static/img/content/logo.png" alt="">
                </div>
                <nav class="header__nav header__item">
                    <ul class="header__nav-list">
                        <li class="header__nav-item header__nav-item--hide-lg">
                            <a href="#section-formula" class="link ">
                               <?= carbon_get_post_meta($pageId, 'promo_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item header__nav-item--hide-lg">
                            <a href="#section-facts" class="link ">
                               <?=carbon_get_post_meta($pageId, 'facts_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item ">
                            <a href="#section-projects" class="link ">
                               <?=carbon_get_post_meta($pageId, 'projects_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item ">
                            <a href="#section-faq" class="link ">
                                <?=carbon_get_post_meta($pageId, 'questions_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item ">
                            <a href="#section-review" class="link ">
                                <?=carbon_get_post_meta($pageId, 'reviews_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item ">
                            <a href="#section-services" class="link ">
                                <?=carbon_get_post_meta($pageId, 'services_title')?>
                            </a>
                        </li>
                        <li class="header__nav-item header__nav-item--hide-lg">
                            <a href="#section-gallery" class="link ">
                                <?=carbon_get_post_meta($pageId, 'gallery_title')?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header__item">
                    <ul class="socials">
                        <li class="socials__item">
                            <a href="<?= carbon_get_theme_option('site_vk')?>" target="_blank">

                                <svg class="icon__vk" width="24px" height="26px">
                                    <use xlink:href="svg-symbols.svg#vk"></use>
                                </svg>

                            </a>
                        </li>
                        <li class="socials__item">
                            <a href="<?= carbon_get_theme_option('site_inst')?>" target="_blank">

                                <svg class="icon__inst" width="24px" height="26px">
                                    <use xlink:href="svg-symbols.svg#inst"></use>
                                </svg>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header__item">
                    <div class="contacts">
                        <div class="contacts__phone">
                            <a href="tel:<?= carbon_get_theme_option('site_phone')?>">
                                <?= carbon_get_theme_option('site_phone')?>
                            </a>
                        </div>
                        <address class="contacts__email">
                            <?= carbon_get_theme_option('site_email')?>
                        </address>
                    </div>
                </div>
                <div class="header__item">
                    <div class="d-xl-block d-none">
                        <a class="button button--blue" href="#section-form" aria-label="Перейти к форме обратной связи">
                            Потанцуем?
                        </a>
                    </div>
                    <div class="d-xl-none d-flex header__button--small">
                        <a href="#section-form">

                            <svg class="icon__phone" width="15px" height="14px">
                                <use xlink:href="svg-symbols.svg#phone"></use>
                            </svg>

                        </a>
                    </div>
                </div>
                <div class="header__burger">
                    <button class="burger" aria-label="Меню">

                        <svg class="icon__burger" width="36px" height="36px">
                            <use xlink:href="svg-symbols.svg#burger"></use>
                        </svg>

                    </button>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <div class="menu__close">
                <svg class="icon__cross" width="20px" height="20px">
                    <use xlink:href="svg-symbols.svg#cross"></use>
                </svg>
            </div>
            <ul class="menu">
                <li class="menu__item">
                    <a href="#section-formula" class="link ">
                        <?= carbon_get_post_meta($pageId, 'promo_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-facts" class="link ">
                        <?=carbon_get_post_meta($pageId, 'facts_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-projects" class="link ">
                        <?=carbon_get_post_meta($pageId, 'projects_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-faq" class="link ">
                        <?=carbon_get_post_meta($pageId, 'questions_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-review" class="link ">
                        <?=carbon_get_post_meta($pageId, 'reviews_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-services" class="link ">
                        <?=carbon_get_post_meta($pageId, 'services_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <a href="#section-gallary" class="link ">
                        <?=carbon_get_post_meta($pageId, 'gallery_title')?>
                    </a>
                </li>
                <li class="menu__item">
                    <ul class="socials">
                        <li class="socials__item">
                            <a href="<?= carbon_get_theme_option('site_vk')?>" aria-label="Переход в телеграмм" target="_blank">

                                <svg class="icon__vk" width="24px" height="26px">
                                    <use xlink:href="svg-symbols.svg#vk"></use>
                                </svg>

                            </a>
                        </li>
                        <li class="socials__item">
                            <a href="  <?= carbon_get_theme_option('site_inst')?>" aria-label="Переход в инстаграм" target="_blank">

                                <svg class="icon__inst" width="24px" height="26px">
                                    <use xlink:href="svg-symbols.svg#inst"></use>
                                </svg>

                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>