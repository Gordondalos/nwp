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
define('DB_NAME', 'nwp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9A<xM}]#j5%p@N-wPCM^zboGaE$_P1LtTMBrab@[|E[8rt!;monW)!e/XS-o=/>u');
define('SECURE_AUTH_KEY',  '&*5anH)vA^ti&oBt -3$7h(Y$CL+t+vP5C0DoBk1t%:D4,]Qi}|68+oBn|#9AK:7');
define('LOGGED_IN_KEY',    'O1Tw<b&~m>2TF+g#IUz H;O/^wuQ_n|vCp+<dm!$CHM+#VvnF/l|#0+e}N|JucT9');
define('NONCE_KEY',        '*wO>u_Y,a,abL(-8O+@H|+BL+&<Y2bo6-$6)![nCpqBr*+Dcs+phG4YxWLjIPW@3');
define('AUTH_SALT',        '7RYFF<)Q@cz,W~{~rZ>>.jb$h$tq$<kkWSZ>h,miaeGsH#3h2UjL3`z(+II{v^[Q');
define('SECURE_AUTH_SALT', '^dD|@D/o#&^R;]+gfav^[HORpV}oE9[|9/M~+06rGYos3i+L3%?ikCA(d!6SB#}y');
define('LOGGED_IN_SALT',   '?ahgL&s}vDi=@EG>|4g+$K>?W+ux|M:/A|9+hfn}]~5GQAbi#waurAfU Qe|J?<b');
define('NONCE_SALT',       'oB|{2.Jm=H?83%MBCL[L;4vDsqLPb#w`5%6g;Pm.J6@|l+PV=}&&O<>|D|Sx[,S<');

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
