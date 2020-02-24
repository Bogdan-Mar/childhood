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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'QlWUpkQez(hBXaA+SIaL>=rnb9}n^6:cdnPo2hhV4})I!JMk;4Y&9(iin6T^JNM)' );
define( 'SECURE_AUTH_KEY',  '54_A*O*VJ^`#y4W$ri)1yFSF?G!,_Hzk 97J }9n>[Dxy,9P}1-Qm?M)7kr9Y+~k' );
define( 'LOGGED_IN_KEY',    '#46~lBmPeS<s~]sCk6Blmfwz,{(AKJ9zZ9IKu8c;9q[Y90N7H(x9ZJ#{=:ed=]Jm' );
define( 'NONCE_KEY',        'j><SQl`kgPA7Q$s]AFy*s]IHhX[d]f5sA]R391b@c{[u7S;boq)>8T@WYmW#N]nF' );
define( 'AUTH_SALT',        '>`7e8f^JN5)eLqOd`F;Gq;c@Mz:Lf5zq{o7c.2,OA<l1)(d^|G7-XV#7o51Be])v' );
define( 'SECURE_AUTH_SALT', 'Y^|e+Nm-8FdE(@>c?^Sv$$Gi7OT1+I<iCZbe9@%1<|7RMc >0BhC@~)mZ~CXI3>t' );
define( 'LOGGED_IN_SALT',   '9Erzl5?Wqy(2z-=Es1~y:3Qw!*~hjeKRVnSkD.-s#7lAN6[y<86kS5DbU#ZZM&yg' );
define( 'NONCE_SALT',       'B/RSdZ>je=y}?`Ui{>rf%E2zc<=(A2t49g]<siXkd>d(l*|*W}0gfu(/H(TdH85R' );

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
