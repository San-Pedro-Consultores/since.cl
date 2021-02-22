<?php 
/**
 * config
 * 
 * @package tsubit.com
 * @author tsubit.com
 */

// ** MySQL settings ** //
/** The name of the database */
define('DB_NAME', 'tsubit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** MySQL port */
define('DB_PORT', '3306');

// ** System URL ** //
define('SYS_URL', 'https://since-cl.herokuapp.com'); // e.g (http://www.tsubit.com)

// ** i18n settings ** //
define('DEFAULT_LOCALE', 'en_en');

// ** config system ** //
define('system_description', 'descripción web');
define('system_title', 'since');
define('system_version', '1.0.0');
define('system_keywords', 'demo, demo, demo');

/**
 * For developers: tsubit debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use debug
 * in their development environments.
 */
define('DEBUGGING', true);
define('COMPILADO', true);

?>