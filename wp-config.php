<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'blog-site');

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
define('AUTH_KEY',         '~>>rw;qdC1!Q`37OYo|usNcd3x<Kg20SAG|3/BG|knPcWl0c;-i> JdR)*f^tU!9');
define('SECURE_AUTH_KEY',  'm<]f|-tZI$nx+1V{K*5H2|(<#`e:o@~|YU2BVvk`GEHU{=_mYTiYoRsOOpkxqZ@-');
define('LOGGED_IN_KEY',    '|s93Msqy{ZkX#X$%Q1|;+-JU/(YlI:1O%LFvcU0h-X.Bx6P ?5VOqIu)nmta|czv');
define('NONCE_KEY',        'O$h-Y!z)pHRnU9&A3s,PZ11.>[0;`PGCC}W.ykI9G$!cnVN]Oe3pVxP<$Fq+ 6Ph');
define('AUTH_SALT',        '+~dqX_<!LIghu7R^-HjDq0a$Yj!,RjF7&*74hWf!1kwLkhxGU*2p]=ub}u_tz+~d');
define('SECURE_AUTH_SALT', '#TVf$^.c<O+w>FHX-=l;NX+e;m]O&lEU7,~$?5XUt+5fJ)G%>lZLn_81s~q%o34t');
define('LOGGED_IN_SALT',   'cTu=> VIU-CV`gb=I}V2HO?xg1D=?BD4I-z`~_}:Rcx,K5.Ki;!#RoD-F0N6{RkI');
define('NONCE_SALT',       '~3Uj2lQjVKCJy2ydg-6^%<:%/!Yhe^un%C2FbG(-txDH4hjd|6kUjg5<v7--{-$g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bs_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
