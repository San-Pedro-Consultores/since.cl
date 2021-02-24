<?php 
/**
 * bootstrap
 * 
 * @package tsubit.com
 * @author tsubit.com
 */


// set absolut & base path
define('ABSPATH',dirname(__FILE__).'/');
define('BASEPATH',dirname($_SERVER['PHP_SELF']));

// get system configurations
require_once(ABSPATH.'includes/config.php');

// enviroment settings
if(DEBUGGING) {
    ini_set("display_errors", true);
    error_reporting(E_ALL ^ E_NOTICE);
} else {
    ini_set("display_errors", false);
    error_reporting(0);
}

// get functions
require_once(ABSPATH.'includes/functions.php');

// check system URL
check_system_url();

// start session
ini_set('session.cookie_httponly', 1);
if(get_system_protocol() == "https") {
    ini_set('session.cookie_secure', 1);
}
session_start();
/* set session secret */
if(!isset($_SESSION['secret'])) {
    $_SESSION['secret'] = get_hash_token();
}

// i18n config
require_once(ABSPATH.'includes/libs/gettext/gettext.inc');
T_setlocale(LC_MESSAGES, DEFAULT_LOCALE);
$domain = 'messages';
T_bindtextdomain($domain, ABSPATH .'content/languages/locale');
T_bind_textdomain_codeset($domain, 'UTF-8');
T_textdomain($domain);

// time config
date_default_timezone_set( 'UTC' );
$time = time();
$minutes_to_add = 0;
$DateTime = new DateTime();
$DateTime->add(new DateInterval('PT' . $minutes_to_add . 'M'));
$date = $DateTime->format('Y-m-d H:i:s');

// connect to the database
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
$db->set_charset('utf8mb4');
if(mysqli_connect_error()) {
    _error(DB_ERROR);
}
/* set db time to UTC */
$db->query("SET time_zone = '+0:00'");

/* set system config */
$system['system_url'] = SYS_URL;
$system['system_description'] = system_description;
$system['system_title'] = system_title;
$system['system_version'] = system_version;
$system['system_keywords'] = system_keywords;

/* get compilado */
if(COMPILADO) {
    $system['compilado'] = 'http://localhost:3003/';
} else {
    $system['compilado'] = $system['system_url'].'/content/themes/static/';
}

// smarty config
require_once(ABSPATH.'includes/libs/Smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = ABSPATH.'content/themes/templates';
$smarty->compile_dir = ABSPATH.'content/themes/templates_compiled';
$smarty->loadFilter('output', 'trimwhitespace');

// get user
require_once(ABSPATH.'includes/class-user.php');
try {
    $user = new User();
    /* assign variables */
    $smarty->assign('user', $user);
} catch (Exception $e) {
    _error(__("Error"), $e->getMessage());
}

// assign system varibles
$smarty->assign('secret', $_SESSION['secret']);
$smarty->assign('system', $system);
$smarty->assign('date', $date);

?>