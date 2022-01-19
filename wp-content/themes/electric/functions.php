<?php

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 ); //remove dns-prefetch
remove_action('wp_head', 'wp_generator'); //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link'); //remove wlwmanifest
remove_action('wp_head', 'rsd_link'); // remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');// remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical'); //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10); //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links'); //remove alternate


add_action( 'init', 'register_post_types' );
add_action( 'init', 'create_taxonomy' );
add_action( 'carbon_fields_register_fields', 'register_theme_options' );
add_action('wp_enqueue_scripts', 'site_scripts');
add_action('after_setup_theme', 'theme_support');


function theme_support() {
    add_theme_support('post-thumbnails');
}

function site_scripts() {
  $version = '0.0.0.4';
  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style('main', get_template_directory_uri() . '/static/css/main.css', $version);
  wp_enqueue_style('custom', get_template_directory_uri() . '/static/css/custom.css', $version);
  wp_enqueue_script( 'svg', get_template_directory_uri() . '/static/js/separate-js/svg4everybody.min.js', [], $version, true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/static/js/main.js', ['svg'], $version, true);
}

function register_theme_options() {
  require_once __DIR__ . '/carbon-fields/theme-options.php';
  require_once __DIR__ . '/carbon-fields/post-meta.php';
}


function register_post_types(){
    register_post_type( 'content', [
        'label'  => null,
        'labels' => [
            'name'               => 'Контент', // основное название для типа записи
            'singular_name'      => 'Запись', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование записи', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'menu_name'          => 'Контент', // название меню
        ],
        'description'         => '',
        'public'              => true,
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-admin-post',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => true,
        'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
    ] );
}


function create_taxonomy(){
    register_taxonomy( 'categories', [ 'post' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Категории',
            'singular_name'     => 'Категория',
            'search_items'      => 'Искать категорию',
            'all_items'         => 'Все категрии',
            'edit_item'         => 'Изменить категорию',
            'update_item'       => 'Обновить категорию',
            'add_new_item'      => 'Добавить категорию',
            'new_item_name'     => 'Новое название категории',
            'menu_name'         => 'Категории',
        ],
        'hierarchical'          => true,
    ] );
}