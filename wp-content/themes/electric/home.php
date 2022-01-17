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
                    <div class="col-md-6">
                        <div class="fact">
                            <div class="fact__content">
                                <div class="fact__title">Бесплатная консультация</div>
                                <div class="fact__desc">
                                    Проконсультирую по телефону, по электронной почте, через мессенджер или приеду к вам.
                                </div>
                            </div>
                            <div class="fact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fact">
                            <div class="fact__content">
                                <div class="fact__title">Экономия времени</div>
                                <div class="fact__desc">
                                    Вы не тратите своё время на поездки в магазин за материалами. Это делаю я.
                                </div>
                            </div>
                            <div class="fact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fact">
                            <div class="fact__content">
                                <div class="fact__title">Опыт более 15 лет</div>
                                <div class="fact__desc">
                                    Работаю давно, к работе отношусь ответственно и делаю ее качественно.
                                </div>
                            </div>
                            <div class="fact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fact">
                            <div class="fact__content">
                                <div class="fact__title">Гарантия на работы</div>
                                <div class="fact__desc">
                                    Даю на свою работу два года гарантии, если не вмешивались посторонние.
                                </div>
                            </div>
                            <div class="fact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z" />
                                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
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