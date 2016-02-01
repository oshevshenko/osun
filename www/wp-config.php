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
define('DB_NAME', 'osun');

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
define('AUTH_KEY',         'H{d(bV`D]l>}:}WHlD3|Jv}v2v,e#Qlt. `rswSNpFwI2L_9.^^B60mwxSB!Z]pg');
define('SECURE_AUTH_KEY',  '8umEug~?0YzlXG_,y@EC]g/{tXuEMS@5*&k2.CTMJ};)=DwC/Oh8p?n{2zTJGqe+');
define('LOGGED_IN_KEY',    'Ugy<ch,6w}SSXrFt{Z81~DNQAObkJFOc]JCM?ED7<*UR#x9,G&*%*jJyJ1R%9$BM');
define('NONCE_KEY',        '%DI*YLO],0D]0#dHxReF3gk1{ *uNU%/]n+3DeQ-*m6YPqM>uk0z{]]H`8`y|b,~');
define('AUTH_SALT',        'ZulOQwR,0B|z4Ei|n/*+Uw$/-tu,TAjwd@fu|TL,<&ZGIz,H_k`=JWd&,_zI7hVb');
define('SECURE_AUTH_SALT', 'pTI+O5H#:; e{-uMh#i}Sws+5HX&Roj}SWL,Bg3=q0L78 5#CQS<&bm;3@>xNoF>');
define('LOGGED_IN_SALT',   '};e*Ts4>!IdM(`EoC+/!t}).k!*k0dokq)v)0aUPuZi&D?Z~Q*hIN{|j*c:MXZ^C');
define('NONCE_SALT',       'cn29s Lh+.:*Nx/Ym;rx&/G>u$`3]sJp8T0;s!6O>=3 LKeK3B$`}QN3EL +yQ^H');

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
