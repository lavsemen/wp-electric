<?php
if (!defined('ABSPATH')) {
  die;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки сайта' ) )
    ->add_tab( 'Общие настройки', [
        Field::make( 'text', 'site_phone', 'Телефон' ),
        Field::make( 'text', 'site_email', 'Email' ),
        Field::make( 'text', 'site_vk', 'Ссылка на вк' ),
        Field::make( 'text', 'site_inst', 'Ссылка на instagram' ),
        FIeld::make( 'textarea', 'site_worktime', 'Время работы')
    ]);