<?php
/* Template Name: Главная страница */
$pageId = get_the_ID();
?>
<?php get_header() ?>

<section class="section section--first">
    <div class="slider slider--main">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <?php
                    $sliderContent = [
                        'subtitle' => carbon_get_post_meta($pageId, 'slider_subtitle'),
                        'title' => carbon_get_post_meta($pageId, 'slider_title'),
                        'text' => carbon_get_post_meta($pageId, 'slider_text'),
                        'button' => carbon_get_post_meta($pageId, 'slider_button'),
                        'image' => carbon_get_post_meta($pageId, 'slider_image'),
                    ]

                    ?>
                    <div class="slider__content">
                        <?php if ($sliderContent['subtitle']) : ?>
                            <h4 class="slider__subtitle"><?= $sliderContent['subtitle'] ?></h4>
                        <?php endif; ?>

                        <?php if ($sliderContent['title']) : ?>
                            <h1 class="slider__title"><?= $sliderContent['title'] ?></h1>
                        <?php endif; ?>

                        <?php if ($sliderContent['text']) : ?>
                            <div class="slider__desc">
                                <?= $sliderContent['text'] ?>
                            </div>

                        <?php endif; ?>

                        <?php if ($sliderContent['button']) : ?>
                            <div class="slider__button">
                                <a class="button button--blue" href="#section-form ">
                                    <?= $sliderContent['button'] ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="slider__image">
                        <?php
                        $sliderContent['image'] = wp_get_attachment_image_url($sliderContent['image'], 'full');
                        ?>

                        <img src="<?= $sliderContent['image'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-formula">
    <div class="container">
        <?php
        $promoContent = [
            'title' => carbon_get_post_meta($pageId, 'promo_title'),
            'text' => carbon_get_post_meta($pageId, 'promo_text'),
            'video' => carbon_get_post_meta($pageId, 'promo_video')
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $promoContent['title'] ?>
            </div>
        </div>
        <div class="section__body">
            <div class="promo">
                <div class="row gy-3">
                    <div class="col-lg-6">

                        <div class="promo__text">
                            <?= $promoContent['text'] ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="promo__video">
                            <iframe src="<?= $promoContent['video'] ?>" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--colored" id="section-facts">
    <div class="container">
        <?php
        $factsContent = [
            'title' => carbon_get_post_meta($pageId, 'facts_title'),
            'content' =>  carbon_get_post_meta($pageId, 'facts__content')
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $factsContent['title'] ?>
            </div>
        </div>
        <div class="section__body ">
            <div class="facts">
                <div class="row gy-4">
                    <?php foreach ($factsContent['content'] as $arFact):?>
                    <div class="col-md-6">
                        <div class="fact">
                            <div class="fact__content">
                                <div class="fact__title"><?=$arFact['title']?></div>
                                <div class="fact__desc">
                                   <?=$arFact['desc']?>
                                </div>
                            </div>
                            <?php if ($arFact['icon']): ?>
                            <div class="fact__icon">
                                <?php
                                    $factsContent['icon'] = wp_get_attachment_image_url($arFact['icon'], 'full')
                                ?>
                                <img src="<?=$factsContent['icon']?>">
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-projects">
    <div class="container">
        <?php
        $projectsCotnent = [
            'title' => carbon_get_post_meta($pageId, 'projects_title'),
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $projectsCotnent['title'] ?>
            </div>
        </div>
        <div class="section__body">
            <div class="projects swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-card">
                            <img class="project-card__image" src="<?= get_template_directory_uri() ?>/static/img/content/projects/project1.jpeg" alt="">
                            <div class="project-card__content">
                                <div class="project-card__title">
                                    2к квартира 65м2
                                </div>
                                <div class="project-card__adress">
                                    ул.Пушкина д.24 кв.104
                                </div>
                            </div>
                            <div class="project-card__aside">
                                <div class="project-card__aside-title">
                                    Работа на проекте
                                </div>
                                <ul class="project-card__aside-desc">
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, provident.
                                    </li>
                                </ul>
                                <div class="project-card__aside-button">
                                    <a class="button button--stroke" href=" #section-form ">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects__nav">
                    <div class="navigation">
                        <div class="navigation__button navigation__button--prev">
                            <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.0574 0.249537L30.3179 2.02382C30.1989 2.14482 30.1992 2.33805 30.3185 2.45877L33.2662 5.44448L0.704842 5.44449C0.531941 5.44449 0.391602 5.58387 0.391602 5.75558L0.391602 8.24448C0.391602 8.4162 0.531942 8.55558 0.704842 8.55558L33.2662 8.55558L30.3185 11.5413C30.1995 11.662 30.1992 11.8549 30.3179 11.9759L32.0574 13.7502C32.1163 13.8105 32.1971 13.8445 32.2817 13.8445C32.3663 13.8445 32.4471 13.8102 32.506 13.7502L38.9111 7.21687C38.9703 7.15653 39 7.07811 39 7.00001C39 6.92163 38.9702 6.84354 38.9111 6.78287L32.506 0.249537C32.4471 0.18949 32.3663 0.155585 32.2817 0.155585C32.1971 0.155585 32.1163 0.18949 32.0574 0.249537Z" fill="#1B3CE9" />
                            </svg>
                        </div>
                        <div class="navigation__button navigation__button--next">
                            <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.0574 0.249537L30.3179 2.02382C30.1989 2.14482 30.1992 2.33805 30.3185 2.45877L33.2662 5.44448L0.704842 5.44449C0.531941 5.44449 0.391602 5.58387 0.391602 5.75558L0.391602 8.24448C0.391602 8.4162 0.531942 8.55558 0.704842 8.55558L33.2662 8.55558L30.3185 11.5413C30.1995 11.662 30.1992 11.8549 30.3179 11.9759L32.0574 13.7502C32.1163 13.8105 32.1971 13.8445 32.2817 13.8445C32.3663 13.8445 32.4471 13.8102 32.506 13.7502L38.9111 7.21687C38.9703 7.15653 39 7.07811 39 7.00001C39 6.92163 38.9702 6.84354 38.9111 6.78287L32.506 0.249537C32.4471 0.18949 32.3663 0.155585 32.2817 0.155585C32.1971 0.155585 32.1163 0.18949 32.0574 0.249537Z" fill="#1B3CE9" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-faq">
    <div class="container">
        <?php
        $questionsContent = [
            'title' => carbon_get_post_meta($pageId, 'questions_title')
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $questionsContent['title'] ?>
            </div>
        </div>
        <div class="section__body">
            <div class="questions">
                <div class="accordion questions__accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Вопрос 1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis perferendis quaerat dolor optio officia nihil error, repellat nisi tenetur iusto, ratione sapiente illo accusantium? Suscipit ad quaerat eos nesciunt ratione!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Вопрос 2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae expedita obcaecati consequatur ab commodi? Iusto ratione, soluta facilis itaque quisquam deserunt alias harum eum dolor esse sit, voluptatem iure quidem!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Вопрос 3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis asperiores recusandae tempora eius animi a assumenda saepe libero corrupti hic odio in minima quam odit voluptatibus dicta natus accusamus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" id="section-review">
    <div class="container">
        <?php
        $reviewsContent = [
            'title' => carbon_get_post_meta($pageId, 'reveiws_title')
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $reviewsContent['title'] ?>
            </div>
        </div>
        <div class="section__body">
            <div class="reviews">
                <div class="reviews-card">
                    <img src="<?= get_template_directory_uri() ?>/static/img/content/reviews/review.jpeg" alt="">
                    <div class="reviews-card__aside">
                        <div class="reviews-card__content">
                            <div class="reviews-card__title">
                                <span class="reviews-card__index">01</span> <span class="reviews-card__text">Проводка в квартире</span>
                            </div>
                        </div>
                        <div class="reviews-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor animi sapiente sunt incidunt rerum eaque obcaecati! Dolore doloribus quidem maxime consequuntur? Labore corporis ad sit doloremque minus ex accusamus.
                        </div>
                    </div>
                </div>
                <div class="reviews-card">
                    <img src="<?= get_template_directory_uri() ?>/static/img/content/reviews/review2.jpeg" alt="">
                    <div class="reviews-card__aside">
                        <div class="reviews-card__content">
                            <div class="reviews-card__title">
                                <span class="reviews-card__index">01</span> <span class="reviews-card__text">Проводка в квартире</span>
                            </div>
                        </div>
                        <div class="reviews-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor animi sapiente sunt incidunt rerum eaque obcaecati! Dolore doloribus quidem maxime consequuntur? Labore corporis ad sit doloremque minus ex accusamus.
                        </div>
                    </div>
                </div>
                <div class="reviews-card">
                    <img src="<?= get_template_directory_uri() ?>/static/img/content/reviews/review.jpeg" alt="">
                    <div class="reviews-card__aside">
                        <div class="reviews-card__content">
                            <div class="reviews-card__title">
                                <span class="reviews-card__index">01</span> <span class="reviews-card__text">Проводка в квартире</span>
                            </div>
                        </div>
                        <div class="reviews-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor animi sapiente sunt incidunt rerum eaque obcaecati! Dolore doloribus quidem maxime consequuntur? Labore corporis ad sit doloremque minus ex accusamus.
                        </div>
                    </div>
                </div>
                <div class="reviews-card">
                    <img src="<?= get_template_directory_uri() ?>/static/img/content/reviews/review2.jpeg" alt="">
                    <div class="reviews-card__aside">
                        <div class="reviews-card__content">
                            <div class="reviews-card__title">
                                <span class="reviews-card__index">01</span> <span class="reviews-card__text">Проводка в квартире</span>
                            </div>
                        </div>
                        <div class="reviews-card__desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero dolor animi sapiente sunt incidunt rerum eaque obcaecati! Dolore doloribus quidem maxime consequuntur? Labore corporis ad sit doloremque minus ex accusamus.
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="section" id="section-services">
    <div class="container">
        <?php
        $servicesContent = [
            'title' => carbon_get_post_meta($pageId, 'services_title')
        ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?= $servicesContent['title'] ?>
            </div>
        </div>
        <div class="section__body">
            <div class="services">
                <div class="services__item">
                    <div class="services__content">
                        <div class="services__title">
                            Подключение электроприборов
                        </div>
                        <div class="services__desc">
                            Подключение электроплиты, духовых шкафов и других электроприборов.
                        </div>
                    </div>
                    <div class="services__price">
                        <span class="services__price--main">1000₽</span>
                        <del class="services__price--old">2000₽</del>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content">
                        <div class="services__title">
                            Подключение электроприборов
                        </div>
                        <div class="services__desc">
                            Подключение электроплиты, духовых шкафов и других электроприборов.
                        </div>
                    </div>
                    <div class="services__price">
                        <span class="services__price--main">1000₽</span>
                        <del class="services__price--old">2000₽</del>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content">
                        <div class="services__title">
                            Подключение электроприборов
                        </div>
                        <div class="services__desc">
                            Подключение электроплиты, духовых шкафов и других электроприборов.
                        </div>
                    </div>
                    <div class="services__price">
                        <span class="services__price--main">1000₽</span>
                        <del class="services__price--old">2000₽</del>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content">
                        <div class="services__title">
                            Подключение электроприборов
                        </div>
                        <div class="services__desc">
                            Подключение электроплиты, духовых шкафов и других электроприборов.
                        </div>
                    </div>
                    <div class="services__price">
                        <span class="services__price--main">1000₽</span>
                        <del class="services__price--old">2000₽</del>
                    </div>
                </div>
                <div class="services__item">
                    <div class="services__content">
                        <div class="services__title">
                            Подключение электроприборов
                        </div>
                        <div class="services__desc">
                            Подключение электроплиты, духовых шкафов и других электроприборов.
                        </div>
                    </div>
                    <div class="services__price">
                        <span class="services__price--main">1000₽</span>
                        <del class="services__price--old">2000₽</del>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (!carbon_get_post_meta($pageId, 'gallery_disabled')):?>
    <section class="section" id="section-gallery">
    <div class="container">
        <?php
            $galleryContent = [
                'title' => carbon_get_post_meta($pageId, 'gallery_title'),
                'content' => carbon_get_post_meta($pageId, 'gallery_photo'),
            ]
        ?>
        <div class="section__header">
            <div class="section__header-title">
                <?=$galleryContent['title']?>
            </div>
        </div>
        <div class="section__body">
            <div class="gallery swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($galleryContent['content'] as $galleryImage):
                        $image = wp_get_attachment_image_url($galleryImage, 'full');
                    ?>
                    <div class="swiper-slide gallery__item">
                        <img src="<?=$image?>" alt="">
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="swiper-button-prev">
                    <div class="gallery__button gallery__button--prev">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.328 6.99999L8.278 11.95L6.864 13.364L0.5 6.99999L6.864 0.635986L8.278 2.04999L3.328 6.99999Z" fill="#fff" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-button-next">
                    <div class="gallery__button gallery__button--next">
                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.328 6.99999L8.278 11.95L6.864 13.364L0.5 6.99999L6.864 0.635986L8.278 2.04999L3.328 6.99999Z" fill="#fff" />
                        </svg>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<section class="section" id="section-form">
    <div class="container">
        <?php
        $formContent = [
            'title' => carbon_get_post_meta($pageId, 'form_title'),
            'desc' => carbon_get_post_meta($pageId, 'form_desc'),
            'image' => carbon_get_post_meta($pageId, 'form_image'),
        ]
        ?>
        <form class="main-form" id="form">
            <div class="row gy-4">
                <div class="col-md-6">
                    <div class="main-form__content">
                        <div class="main-form__title">
                            <?= $formContent['title'] ?>
                        </div>
                        <?php if ($formContent['desc']) : ?>
                            <div class="main-form__desc">
                                <?= $formContent['desc'] ?>
                            </div>
                        <?php endif ?>
                        <div class="main-form__field">
                            <div class="f-input">
                                <label for="form-name" class="f-input__placeholder">Как вас зовут</label>
                                <input type="text" class="input " id="form-name" placeholder="">
                            </div>
                            <div class="main-form__error-message" data-validate-type="error" data-field-id="form-name">
                                Обязательное поле!
                            </div>
                        </div>
                        <div class="main-form__field">
                            <div class="f-input">
                                <label for="form-phone" class="f-input__placeholder">Ваш номер телефона</label>
                                <input type="text" class="input input--phone" id="form-phone" placeholder="">
                            </div>
                            <div class="main-form__error-message" data-validate-type="error" data-field-id="form-phone">
                                Обязательное поле!
                            </div>
                        </div>
                        <div class="main-form__field">
                            <button class="button button--blue" type="submit">
                                Отправить
                            </button>
                        </div>
                        <div class="main-form__policy">
                            Нажимая на кнопку, вы соглашаетесь с условиями обработки персональных данных и политикой конфиденциальности
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-form__image">
                        <?php 
                           $formContent['image'] = wp_get_attachment_image_url($formContent['image'], 'full');
                        ?>
                        <img src="<?= $formContent['image'] ?>" alt="">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
<?php get_footer() ?>