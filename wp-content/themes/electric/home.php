<?php
/* Template Name: Главная страница */
$pageId = get_the_ID();
?>
<?php get_header() ?>
    <main>
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
        <?php if (!carbon_get_post_meta($pageId, 'promo_disabled')): ?>
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
                                        <iframe title="Танцевальное видео" src="<?= $promoContent['video'] ?>" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
        <?php if (!carbon_get_post_meta($pageId, 'facts_disabled')): ?>
            <section class="section" id="section-facts">
                <div class="container">
                    <?php
                    $factsContent = [
                        'title' => carbon_get_post_meta($pageId, 'facts_title'),
                        'content' =>  carbon_get_post_meta($pageId, 'facts_content')
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
                                                <?php if($arFact['desc']):?>
                                                    <div class="fact__desc">
                                                        <?=$arFact['desc']?>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                            <?php if ($arFact['icon']): ?>
                                                <div class="fact__icon">
                                                    <?php
                                                    $factsContent['icon'] = wp_get_attachment_image_url($arFact['icon'], 'full')
                                                    ?>
                                                    <img src="<?=$factsContent['icon']?>" alt="<?=$arFact['desc']?>">
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
        <?php endif;?>
        <?php if (!carbon_get_post_meta($pageId, 'projects_disabled')): ?>
            <section class="section" id="section-projects">
                <div class="container">
                    <?php
                    $projectsContent = [
                        'title' => carbon_get_post_meta($pageId, 'projects_title'),
                        'content' => carbon_get_post_meta($pageId, 'projects_content')
                    ]
                    ?>
                    <div class="section__header">
                        <div class="section__header-title">
                            <?= $projectsContent['title'] ?>
                        </div>
                    </div>
                    <div class="section__body">
                        <div class="projects swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($projectsContent['content'] as &$arProject):

                                    $arProject['icon'] = wp_get_attachment_image_url($arProject['icon'], 'full')
                                    ?>

                                    <div class="swiper-slide">
                                        <div class="project-card">
                                            <img class="project-card__image" src="<?=$arProject['icon']?>" alt="<?=$arProject['title']?>">
                                            <div class="project-card__content">
                                                <?php if ($arProject['title']):?>
                                                    <div class="project-card__title">
                                                        <?=$arProject['title']?>
                                                    </div>
                                                <?php endif;?>
                                                <?php if ($arProject['subtitle']):?>
                                                    <div class="project-card__adress">
                                                        <?=$arProject['subtitle']?>
                                                    </div>
                                                <?php endif;?>
                                            </div>
                                            <div class="project-card__aside">
                                                <?php if ($arProject['block_title']):?>
                                                    <div class="project-card__aside-title">
                                                        <?=$arProject['block_title']?>
                                                    </div>
                                                <?php endif;?>
                                                <?php if ($arProject['desc']):?>
                                                    <div class="project-card__aside-desc">
                                                        <?= $arProject['desc']?>
                                                    </div>
                                                <?php endif;?>
                                                <div class="project-card__aside-button">
                                                    <a class="button button--stroke" href=" #section-form">
                                                        Узнать подробнее
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div class="projects__nav">
                                <div class="navigation">
                                    <div class="navigation__button navigation__button--prev">
                                        <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.0574 0.249537L30.3179 2.02382C30.1989 2.14482 30.1992 2.33805 30.3185 2.45877L33.2662 5.44448L0.704842 5.44449C0.531941 5.44449 0.391602 5.58387 0.391602 5.75558L0.391602 8.24448C0.391602 8.4162 0.531942 8.55558 0.704842 8.55558L33.2662 8.55558L30.3185 11.5413C30.1995 11.662 30.1992 11.8549 30.3179 11.9759L32.0574 13.7502C32.1163 13.8105 32.1971 13.8445 32.2817 13.8445C32.3663 13.8445 32.4471 13.8102 32.506 13.7502L38.9111 7.21687C38.9703 7.15653 39 7.07811 39 7.00001C39 6.92163 38.9702 6.84354 38.9111 6.78287L32.506 0.249537C32.4471 0.18949 32.3663 0.155585 32.2817 0.155585C32.1971 0.155585 32.1163 0.18949 32.0574 0.249537Z" fill="#67087c" />
                                        </svg>
                                    </div>
                                    <div class="navigation__button navigation__button--next">
                                        <svg width="39" height="14" viewBox="0 0 39 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M32.0574 0.249537L30.3179 2.02382C30.1989 2.14482 30.1992 2.33805 30.3185 2.45877L33.2662 5.44448L0.704842 5.44449C0.531941 5.44449 0.391602 5.58387 0.391602 5.75558L0.391602 8.24448C0.391602 8.4162 0.531942 8.55558 0.704842 8.55558L33.2662 8.55558L30.3185 11.5413C30.1995 11.662 30.1992 11.8549 30.3179 11.9759L32.0574 13.7502C32.1163 13.8105 32.1971 13.8445 32.2817 13.8445C32.3663 13.8445 32.4471 13.8102 32.506 13.7502L38.9111 7.21687C38.9703 7.15653 39 7.07811 39 7.00001C39 6.92163 38.9702 6.84354 38.9111 6.78287L32.506 0.249537C32.4471 0.18949 32.3663 0.155585 32.2817 0.155585C32.1971 0.155585 32.1163 0.18949 32.0574 0.249537Z" fill="#67087c" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
        <?php if (!carbon_get_post_meta($pageId, 'questions_disabled')): ?>
            <section class="section" id="section-faq">
                <div class="container">
                    <?php
                    $questionsContent = [
                        'title' => carbon_get_post_meta($pageId, 'questions_title'),
                        'content' => carbon_get_post_meta($pageId, 'questions_content')
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
                                <?php foreach ($questionsContent['content'] as $key => $arQuestion): ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading-<?= $key?>">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?=$key?>" aria-expanded="false" aria-controls="flush-collapse-<?=$key?>">
                                                <?=$arQuestion['title']?>
                                            </button>
                                        </h2>
                                        <div id="flush-collapse-<?=$key?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $key?>" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <?=$arQuestion['desc']?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
        <?php if (!carbon_get_post_meta($pageId, 'reviews_disabled')): ?>
            <section class="section" id="section-review">
                <div class="container">
                    <?php
                    $reviewsContent = [
                        'title' => carbon_get_post_meta($pageId, 'reviews_title'),
                        'content' => carbon_get_post_meta($pageId, 'reviews_content')
                    ]
                    ?>
                    <div class="section__header">
                        <div class="section__header-title">
                            <?= $reviewsContent['title'] ?>
                        </div>
                    </div>
                    <div class="section__body">
                        <div class="reviews">
                            <?php foreach ($reviewsContent['content'] as $key => $arReview):
                                $reviewsContent['image'] = wp_get_attachment_image_url($arReview['image'], 'full');
                                ?>

                                <div class="reviews-card">
                                    <img src="<?= $reviewsContent['image']?>" alt="<?=$arReview['text']?>">
                                    <div class="reviews-card__aside">
                                        <div class="reviews-card__content">
                                            <div class="reviews-card__title">
                                                <span class="reviews-card__text">Отзыв клиента</span>
                                            </div>
                                        </div>
                                        <div class="reviews-card__desc">
                                            <?=$arReview['text']?>
                                        </div>
                                    </div>
                                    <?php if ($arReview['url']): ?>
                                        <a aria-label="Перейти к отзыву" href="<?=$arReview['url']?>" class="reviews-card__link"></a>
                                    <?php endif;?>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
        <?php if (!carbon_get_post_meta($pageId, 'services_disabled')): ?>
            <section class="section" id="section-services">
                <div class="container">
                    <?php
                    $servicesContent = [
                        'title' => carbon_get_post_meta($pageId, 'services_title'),
                        'content' => carbon_get_post_meta($pageId, 'services_content')
                    ]
                    ?>
                    <div class="section__header">
                        <div class="section__header-title">
                            <?= $servicesContent['title'] ?>
                        </div>
                    </div>
                    <div class="section__body">
                        <div class="services">
                            <?php foreach ($servicesContent['content'] as $arServes): ?>
                                <div class="services__item">
                                    <div class="services__content">
                                        <div class="services__title">
                                            <?= $arServes['title']?>
                                        </div>
                                        <?php if ( $arServes['text']):?>
                                            <div class="services__desc">
                                                <?= $arServes['text']?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                    <div class="services__price">
                                        <?php if ( $arServes['price']):?>
                                            <span class="services__price--main"><?=$arServes['price']?></span>
                                        <?php endif;?>
                                        <?php if ( $arServes['old-price']):?>
                                            <del class="services__price--old"><?=$arServes['old-price']?></del>
                                        <?php endif;?>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;?>
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
                                        <img src="<?=$image?>" alt="Фото">
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
            <section class="section" id="section-map">
                <div class="container">
                    <div class="section__header">
                        <div class="section__header-title">
                            <?=carbon_get_post_meta($pageId, 'map_title')?>
                        </div>
                    </div>
                    <div class="section_body">
                        <div id="map" class="map" style="width: 100%; height: 400px"></div>
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
                    'success_text' => carbon_get_post_meta($pageId, 'form_success_text'),
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
                                    <div class=" alert alert-success text-center d-none w-100" role="alert">
                                        <?=$formContent['success_text']?>
                                    </div>
                                </div>
                                <div class="main-form__field flex-column" data-form-hide>
                                    <div class="f-input ">
                                        <label for="form-name" class="f-input__placeholder">Как вас зовут</label>
                                        <input type="text" class="input " id="form-name" name="name" placeholder="">
                                    </div>
                                    <div class="main-form__error-message" data-validate-type="error" data-field-id="form-name">
                                        Обязательное поле!
                                    </div>
                                </div>
                                <div class="main-form__field flex-column" data-form-hide>
                                    <div class="f-input">
                                        <label for="form-phone" class="f-input__placeholder">Ваш номер телефона</label>
                                        <input type="text" class="input input--phone" id="form-phone" name="phone" placeholder="">
                                    </div>
                                    <div class="main-form__error-message" data-validate-type="error" data-field-id="form-phone">
                                        Обязательное поле!
                                    </div>
                                </div>
                                <div class="main-form__field" data-form-hide>
                                    <button class="button button--blue" type="submit">
                                        Отправить
                                    </button>
                                </div>
                                <div class="main-form__policy" data-form-hide>
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
    </main>
<?php get_footer() ?>