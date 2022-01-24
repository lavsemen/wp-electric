<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );



/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RbOyY[|!e*VPs-nbWq<Ps|fyKZKz)T*bP]skD+i^?6>L+40n*0^d73lJ(t6@TK2<' );
define( 'SECURE_AUTH_KEY',  'VWj,{eiG^d} 43!m3qxah]x)kTfQczzKxw&Emc2E@z7y(Ak#~$-TG]aVFI64in/8' );
define( 'LOGGED_IN_KEY',    'S5HUUY*MmtEV:D15e9`Dogg<*<,N*m5Xb[N.*Gsm]*tVY/{u{+]wZT iPKUP9#?&' );
define( 'NONCE_KEY',        '3JmcyB|MeSv(fb{+z^Rv_~pORdc95>b~59AQvO&>:C{,k09 ./O4hW[v#B*O+OlD' );
define( 'AUTH_SALT',        '00`gt4%I?JCEga?><(9rX@?DUx+u/V_Y<~:nM<0B%2|tp]`!T/pl_>gx()|7[ov,' );
define( 'SECURE_AUTH_SALT', ':`JTB}RDxWtNqwT@2PGN94;#LXwz)fBw>P4&`[-hfSB`M{v<PV~`)-e-^i2!4{vT' );
define( 'LOGGED_IN_SALT',   'M8Mh&|E]:q.q]FHN-QqV&*0pFtcCL+ezZ`!&FxHm9JkXHhd`fT{7)oyzt=ayJLFo' );
define( 'NONCE_SALT',       'QVbd)2.w-*>[<JLq$?(AH.hF6##X18ii<;xFtS3qS:R%&:LqJ3LBuK>j~95}>oyQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */

define('WP_MEMORY_LIMIT', '300M');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
