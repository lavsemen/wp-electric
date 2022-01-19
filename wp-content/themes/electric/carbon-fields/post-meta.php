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
    ])
    ->add_tab('Блок "Работа со мной"', [
        Field::make('text', 'facts_title', 'Заголовок'),
        Field::make( 'complex', 'facts__content', 'Работы' )
            ->add_fields( [
                    Field::make( 'text', 'title', 'Заголовок' )
                        ->set_width( 33 ),
                    Field::make( 'textarea', 'desc', 'Описание' )
                        -> set_rows(2)
                        ->set_width( 100 ),
                    Field::make( 'image', 'icon', 'Иконка' )
                        ->set_width( 100 ),
                ]
            )   ->help_text( 'Добавьте запись о ваших работах' )

    ])
    ->add_tab('Блок "Мои работы"', [
        Field::make('text', 'projects_title', 'Заголовок'),
    ])
    ->add_tab('Блок "Часто задоваемые вопросы"', [
        Field::make('text', 'questions_title', 'Заголовок'),
    ])
    ->add_tab('Блок "Отзывы"', [
        Field::make('text', 'reveiws_title', 'Заголовок'),
    ])
    ->add_tab('Блок "Популярные услуги"', [
        Field::make('text', 'services_title', 'Заголовок'),
    ])
    ->add_tab('Блок "Галерея"', [
        Field::make('text', 'gallery_title', 'Заголовок'),
        Field::make('media_gallery', 'gallery_photo', 'Фотографии'),
        Field::make('checkbox', 'gallery_disabled', 'Деактивировать блок')
    ])
    ->add_tab('Блок "Форма"', [
        Field::make('text', 'form_title', 'Заголовок'),
        Field::make('textarea', 'form_desc', 'Описание формы'),
        Field::make('image', 'form_image', 'Картинка для формы'),
    ]);
