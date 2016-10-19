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
define('DB_NAME', 'sydney');

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
define('AUTH_KEY',         '=E}x;iEGs*inqQ*~g_z]iN#gs:-*Qtik5ozod_125Qb#<MS)z<u9`T+PG:fION[1');
define('SECURE_AUTH_KEY',  'uJWVyU1^G|vzj([BKa7$h&J*T=Z99@j.ek`U]B_Y ON:p|`j$?[[D,4;*qUah4Dl');
define('LOGGED_IN_KEY',    'y3(@r~/h(Vko4>E;9*@SBD/*.9/s(S8aJr ~6 7L0/v/(18|9606YT=OGdxW8pGI');
define('NONCE_KEY',        'P|A_?M7_3-hv$@w@z0`zCQQ: Lgc@@`OGvWsm<R,}$+S}<*6<w!.eykq+9OZFF/l');
define('AUTH_SALT',        '%FD]F*d@Oi+6eS&rzD0`n..n[mOHN?UMIVq^+Q@07uTHeQL@&EI>nek$]mhwEG f');
define('SECURE_AUTH_SALT', 'o5z`&K9!nSb820#&J{x1YiJ-C$K@{y}kpbYBk-#c?#bg]{Jg4u=U])W)3=wVINat');
define('LOGGED_IN_SALT',   '0D!%83%WKRrD)]OtJcPk&2gm[`/u95H<|#ND P>,+9r$=ajZym%9&N_hmomboM:C');
define('NONCE_SALT',       '7H4QZ;I0?.^<Y+&m|Z5u*X`FC$[{)`}j8]A_/f3H5sMk{.-C[bAbc|%L0wwTH#[>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'sy_';

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
