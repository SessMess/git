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
define('DB_NAME', 'db');

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
define('AUTH_KEY',         'E}JqXdM#`H-EKR>-K5VOrrh|G)Nx}rLi!atTJK+Ka@&3-Nw{b-<ldlLU8Qpq<D@(');
define('SECURE_AUTH_KEY',  '`X_%p3I`|#1p4B[[:o-YC;&iBbKl@MvF{hBmI+jN1z-Qbm`3Ws1w(wZ<iJQ&4xTR');
define('LOGGED_IN_KEY',    'K}|mC~xav1|xwbzdG^;[B8Ld9da*bi/lf%a`#3x{;x= _AwK~LyKQR+t2)LV2M-x');
define('NONCE_KEY',        '7:xQ)ei-O?H/0~`^|i5HglC~M|ZehR5;1x{UIBLY|Tx&9|#* +=cM4<t?6~BBZ]7');
define('AUTH_SALT',        'l>G4#M9R:S<ApmKObl<nF)PCTc5+`Xe*|?:IS+V=!eb^RR1w^WU|xieE_]v3Fa^R');
define('SECURE_AUTH_SALT', '$_?$%]uD0?iVyNXnjO)k;!HL[npedcObzDQ0#x]rlZ5H+-`t;r+7aaXv2Km1l^RS');
define('LOGGED_IN_SALT',   'RLY ]:E|L2X,3/j`nxHeR`-uCtqv@-(>!e7onMMX1hE1 .ic?2! ,^qh~INzUU%h');
define('NONCE_SALT',       '3UnYiaEEhxTC{Rn[-P9bn{4>v2mmD=5ag[,nGaOvlVh+3jdZh]EjGIS>q8#a[@Bb');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
