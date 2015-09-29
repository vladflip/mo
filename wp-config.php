<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'mo');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eQrvydA3Yo;P7pWTQNy@!NdGf8F(=~UfYDbr&6]+aN]_sMKc$_0TEx9-jZZK}&~/');
define('SECURE_AUTH_KEY',  'KJQ+aRhxR0lBe(.C}b~B6+u,XeCb{n8L Gah{bD_OBuV<8[nyrVS2~<4v^s7.fJx');
define('LOGGED_IN_KEY',    '++#=T#+C*F}ip^ijP>u:Hj8mt<a^^K5Yk+  G#XK4E2Yhj5TBzuy@ZB8|Qj8Pp}u');
define('NONCE_KEY',        '-NzR+6eO~Q)~it~Epoukqw-lyS.|+acdjS|(K2lg8SrO-|GU577p6~;qZdhc!ijc');
define('AUTH_SALT',        '&-ML(.GXk+-Vr*1Z^N0:vYWv<TYCRpEXxIpB1g(-E(,U+z|[ );CJG_Zf[:z vBn');
define('SECURE_AUTH_SALT', 'M1O49;EZM{D6=!Hh]g3g>IXe+o<[zSYhy8^o?5!+cl-WM6bSTjk|!Tk%C<SB+O+A');
define('LOGGED_IN_SALT',   'Y-$h{LSC0V4(@BB0|5@4]qvhckFX~xM-:).+vd-7)-C0i&JiMj<J^z+?_#6?h?yP');
define('NONCE_SALT',       '+09~|GQX`(zpA:Pcw}) 9~a9=@N7|U9qj.(f}u,?`P=E|3_7MF|BAgPQl%J- p^R');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
