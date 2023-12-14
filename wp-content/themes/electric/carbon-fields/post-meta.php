<?php
if (!defined('ABSPATH')) {
    die;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', __('Настройки блоков главной страницы'))
    ->show_on_page(23)
    ->add_tab('Первый экран', [
        Field::make('text', 'slider_subtitle', 'Надзаголовок')
            ->set_width(50),
        Field::make('text', 'slider_title', 'Заголовок')
            ->set_width(50),
        Field::make('text', 'slider_button', 'Текст кнопки')
            ->set_width(50),
        Field::make('image', 'slider_image', 'Изображение')
            ->set_width(50),
        Field::make('rich_text', 'slider_text', 'Текст'),
    ])


    ->add_tab('Блок с видео', [
        Field::make('text', 'promo_title', 'Заголовок'),
        Field::make('rich_text', 'promo_text', 'Текст'),
        Field::make('text', 'promo_video', 'Ссылка на видео типа iframe'),
        Field::make('checkbox', 'promo_disabled', 'Деактивировать блок')

    ])


    ->add_tab('Блок "Работа со мной"', [
        Field::make('text', 'facts_title', 'Заголовок'),
        Field::make( 'complex', 'facts_content', 'Почему стоит рабоать со мной' )
            ->add_fields( [
                    Field::make( 'text', 'title', 'Заголовок' )
                        ->set_width( 33 ),
                    Field::make( 'textarea', 'desc', 'Описание' )
                        -> set_rows(2)
                        ->set_width( 100 ),
                    Field::make( 'image', 'icon', 'Иконка' )
                        ->set_width( 100 ),
                ]
            )   ->help_text( 'Фактоиды' ),
        Field::make('checkbox', 'facts_disabled', 'Деактивировать блок')

    ])


    ->add_tab('Блок "Мои работы"', [
        Field::make('text', 'projects_title', 'Заголовок'),
        Field::make( 'complex', 'projects_content', 'Почему стоит рабоать со мной' )
            ->add_fields( [
                    Field::make( 'text', 'block_title', 'Заголовок блока' )
                        ->set_width( 33 ),
                    Field::make( 'text', 'title', 'Название' )
                        ->set_width( 33 ),
                    Field::make( 'text', 'subtitle', 'Краткое описание')
                        ->set_width( 33 ),
                    Field::make( 'rich_text', 'desc', 'Описание работы на проекте' )
                        ->set_width( 100 ),
                    Field::make( 'image', 'icon', 'Фото' )
                        ->set_width( 100 ),
                ]
            ),
        Field::make('checkbox', 'projects_disabled', 'Деактивировать блок')
    ])


    ->add_tab('Блок "Часто задоваемые вопросы"', [
        Field::make('text', 'questions_title', 'Заголовок'),
        Field::make( 'complex', 'questions_content', 'Вопросы')
            -> add_fields([
                Field::make('text', 'title', 'Вопрос'),
                Field::make('textarea', 'desc', 'Ответ'),
            ]),
        Field::make('checkbox', 'questions_disabled', 'Деактивировать блок')
    ])



    ->add_tab('Блок "Отзывы"', [
        Field::make('text', 'reviews_title', 'Заголовок'),
        Field::make( 'complex', 'reviews_content', 'Отзывы клиентов')
            -> add_fields([
                Field::make('image', 'image', 'Фото'),
                Field::make('text', 'text', 'Отзыв'),
                Field::make('text', 'url', 'Ссылка на отзыв'),
            ]) -> set_max(5),
        Field::make('checkbox', 'reviews_disabled', 'Деактивировать блок'),
    ])


    ->add_tab('Блок "Популярные услуги"', [
        Field::make('text', 'services_title', 'Заголовок'),
        Field::make( 'complex', 'services_content', 'Услгуи')
            -> add_fields([
                Field::make('text', 'title', 'Название услуги'),
                Field::make('textarea', 'text', 'Описание услуги'),
                Field::make('text', 'price', 'Цена') -> set_width(50),
                Field::make('text', 'old-price', 'Старая цена') -> set_width(50),
            ]),
        Field::make('checkbox', 'services_disabled', 'Деактивировать блок')
    ])


    ->add_tab('Блок "Галерея"', [
        Field::make('text', 'gallery_title', 'Заголовок'),
        Field::make('media_gallery', 'gallery_photo', 'Фотографии'),
        Field::make('checkbox', 'gallery_disabled', 'Деактивировать блок')
    ])

    ->add_tab('Блок "Карта"', [
        Field::make('text', 'map_title', 'Заголовок'),
    ])


    ->add_tab('Блок "Форма"', [
        Field::make('text', 'form_title', 'Заголовок'),
        Field::make('textarea', 'form_desc', 'Описание формы'),
        Field::make('textarea', 'form_success_text', 'Текст при успешной отправке формы'),
        Field::make('image', 'form_image', 'Картинка для формы'),
    ]);
