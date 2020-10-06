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
define( 'DB_NAME', 'work_domakarkas_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4!2J24]wa~W/,k7-%yd>S}/oO.FU*:8-_i?d!>F1c9F~[M|0fWrrh{=IA(8?RM>#' );
define( 'SECURE_AUTH_KEY',  'prDM9B.#1hq#*f.cxW:[uTW!KlUR4KC09 Kn>`zH-pZmIP)7NONE9^5;Qs`>N@uu' );
define( 'LOGGED_IN_KEY',    '[Z_/:rU+{zndVCL;e[$ao$+#ECIerduuI>|hWMDm*y p,-@Mc oL)d9Wf)W?v(h6' );
define( 'NONCE_KEY',        'v=L`OpX#NJ6Hu0COg6;w$uLC$vq&(z]F-3_Fwrto9Q|-LqvArkK]aFJ$CnN7GC:1' );
define( 'AUTH_SALT',        'g4nf35)kEP`|gyw-W)lUf3|rRBKz|+}r3W5$@MNDePl{e>K?|V.&yna7lHIY.#{q' );
define( 'SECURE_AUTH_SALT', ' ac0sEOdI,f*,rl{=m8,H$R`kfX 4^DoL]wK:Vy>_mLhL?W$]u/1D(XcVj/$usWR' );
define( 'LOGGED_IN_SALT',   '/x8+6rL/`5kgK2TidC_!_IN%o$:8j=`@+Vz*)z-ss#5;[75sAX{J5l2!mP;#3fvR' );
define( 'NONCE_SALT',       'fyWMg#6s!#TK(mD|y*#$,O/KnbwoWYs.x} Q)iYvJQ=Lu~6R-Sw1yGzjaw/2Azgv' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wdpq1_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
