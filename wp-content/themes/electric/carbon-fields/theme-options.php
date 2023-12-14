<?php
if (!defined('ABSPATH')) {
  die;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки сайта' ) )
    ->add_tab( 'Общие настройки', [
        Field::make( 'text', 'site_phone', 'Телефон' ),
        Field::make( 'text', 'site_email', 'Адресс' ),
        Field::make( 'text', 'site_vk', 'Ссылка на телеграм' ),
        Field::make( 'text', 'site_inst', 'Ссылка на instagram' ),
    ]);