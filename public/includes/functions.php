<?php
/**
 * functions
 * 
 * @package tsubit.com
 * @author tsubit.com
 */


/**
 * _error
 * 
 * @return void
 */
function _error() {
    global $system;
    $args = func_get_args();
    if(count($args) > 1) {
        $title = $args[0];
        $message = $args[1];
    } else {
        switch ($args[0]) {
            case 'DB_ERROR':
                $title = "Database Error";
                $message = "<div class='text-left'><h1>"."Error establishing a database connection"."</h1>
                            <p>"."This either means that the username and password information in your config.php file is incorrect or we can't contact the database server at localhost. This could mean your host's database server is down."."</p>
                            <ul>
                                <li>"."Are you sure you have the correct username and password?"."</li>
                                <li>"."Are you sure that you have typed the correct hostname?"."</li>
                                <li>"."Are you sure that the database server is running?"."</li>
                            </ul>
                            </div>";
                break;

            case 'SQL_ERROR':
                $title = __("Database Error");
                $message = __("Se produjo un error al escribir en la base de datos. Por favor, inténtelo de nuevo más tarde");
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    $message .= "<br><br><small>This error function was called from line $line in file $file</small>";
                }
                break;

            case 'SQL_ERROR_THROWEN':
                $message = __("Se produjo un error al escribir en la base de datos. Por favor, inténtelo de nuevo más tarde");
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    $message .= "<br><br><small>This error function was called from line $line in file $file</small>";
                }
                throw new Exception($message);
                break;

            case 'PERMISSION':
                global $smarty;
                $title = __("Permission Needed");
                $message = __("You do not have the permission to view this content");
                if(isset($smarty)) {
                    $smarty->assign('message', $message);
                    page_header($title);
                    page_footer('permission');
                    exit;
                }
                break;

            case '404':
                global $smarty;
                header('HTTP/1.0 404 Not Found');
                $title = __("404 Not Found");
                $message = __("Lo sentimos, pero la página que está buscando no existe, se ha eliminado. nombre cambiado o no está disponible temporalmente");
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    $message .= "<br><br><small>This error function was called from line $line in file $file</small>";
                }
                if(isset($smarty)) {
                    $smarty->assign('message', $message);
                    page_header($title);
                    page_footer('404');
                    exit;
                }
                break;

            case 'nsfw':
                global $smarty;
                $title = __("Contenido para mayores de edad");
                $message = __("Lo sentimos, pero la página que está buscando tiene contenido para mayores de edad");
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    $message .= "<br><br><small>This error function was called from line $line in file $file</small>";
                }
                if(isset($smarty)) {
                    $smarty->assign('message', $message);
                    page_header($title);
                    page_footer('nsfw');
                    exit;
                }
                break;

            case '400':
                header('HTTP/1.0 400 Bad Request');
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    exit("This error function was called from line $line in file $file");
                }
                exit;
                break;

            case '403':
                header('HTTP/1.0 403 Access Denied');
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    exit("This error function was called from line $line in file $file");
                }
                exit;
                break;
            
            default:
                $title = __("Error");
                $message = __("There is some thing went wrong");
                if(DEBUGGING) {
                    $backtrace = debug_backtrace();
                    $line=$backtrace[0]['line'];
                    $file=$backtrace[0]['file'];
                    $message .= "<br><br>"."<small>This error function was called from line $line in file $file</small>";
                }
                break;
        }
    }
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>'.$title.'</title>
        
        <style>
body {
margin: 0px;
}
@font-face {
font-family: "Work Sans";
font-style: normal;
font-weight: 300;
src: local("Work Sans Light"), local("WorkSans-Light"),
url(https://fonts.gstatic.com/s/worksans/v2/FD_Udbezj8EHXbdsqLUpl3hCUOGz7vYGh680lGh-uXM.woff)
  format("woff");
}
*,
*::before,
*::after {
box-sizing: border-box;
}
html,
body {
font-size: 12px;
overflow: hidden;
text-align: center;
font-family: "Work Sans", sans-serif;
line-height: 1.4;
overflow: hidden;
width: 100%;
}
.under,
html,
body {
height: 100vh;
}
@-webkit-keyframes charge {
from {
-webkit-transform: translateY(2rem);
transform: translateY(2rem);
opacity: 0;
}
to {
-webkit-transform: translateY(0);
transform: translateY(0);
opacity: 1;
}
}
@keyframes charge {
from {
-webkit-transform: translateY(2rem);
transform: translateY(2rem);
opacity: 0;
}
to {
-webkit-transform: translateY(0);
transform: translateY(0);
opacity: 1;
}
}
@-webkit-keyframes wave {
from {
-webkit-transform: rotate(0deg);
transform: rotate(0deg);
}
to {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
@keyframes wave {
from {
-webkit-transform: rotate(0deg);
transform: rotate(0deg);
}
to {
-webkit-transform: rotate(360deg);
transform: rotate(360deg);
}
}
.under__content {
color: #fff;
font-weight: 300;
padding: 0 2rem;
}
.under__content,
.under__footer {
width: 100%;
position: relative;
z-index: 100;
}
.under,
.under__content,
.under__footer {
display: -webkit-box;
display: flex;
-webkit-box-align: center;
align-items: center;
-webkit-box-pack: center;
justify-content: center;
}
.under,
.under__content {
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
flex-direction: column;
}
.under__footer,
.under__text,
.under__title {
-webkit-animation: charge 0.5s both;
animation: charge 0.5s both;
}
.under__footer {
flex-wrap: wrap;
max-width: 600px;
opacity: 0;
-webkit-animation-delay: 0.5s;
animation-delay: 0.5s;
}
.under__subtitle,
.under__title {
margin: 0;
}
.under__footer a {
font-size: 20px;
color: #fff;
padding: 14px;
background-color: rgba(0, 0, 0, 0.5);
margin: 2px;
border-radius: 3px;
width: 51px;
-webkit-transition: background 0.3s;
transition: background 0.3s;
}
.under__footer a:active,
.under__footer a:focus,
.under__footer a:hover {
text-decoration: none;
}
.under__footer a:hover {
background-color: rgba(0, 0, 0, 0.9);
}
.under__subtitle,
.under__text,
.under__title {
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}
.under__title {
font-size: 2.4rem;
font-weight: 300;
}
.under__text {
max-width: 50rem;
font-weight: 300;
padding: 2rem 0;
font-size: 1.3rem;
color: rgba(255, 255, 255, 0.8);
-webkit-animation-delay: 0.3s;
animation-delay: 0.3s;
}
@media (min-width: 768px) {
html {
font-size: 14px;
}
.under__title {
font-size: 3.4rem;
}
.under__text {
font-size: 1.5rem;
}
}

/*
=> Wave: https://codepen.io/zkreations/pen/VGWzYv
*/
.wave {
opacity: 0.6;
position: absolute;
bottom: 40%;
left: 50%;
width: 6000px;
height: 6000px;
background: #000;
margin-left: -3000px;
-webkit-transform-origin: 50% 48%;
transform-origin: 50% 48%;
border-radius: 46%;
-webkit-animation: wave 12s infinite linear;
animation: wave 12s infinite linear;
pointer-events: none;
}
.wave2 {
-webkit-animation: wave 28s infinite linear;
animation: wave 28s infinite linear;
opacity: 0.3;
}
.wave3 {
-webkit-animation: wave 20s infinite linear;
animation: wave 20s infinite linear;
opacity: 0.1;
}

/*
=> Personalizar
*/
/* Wave
--------------------------------------------*/
.wave {
background: #000; /*color de fondo*/
}
/* Under
--------------------------------------------*/
.under {
background-color: #061c2d;
}
</style>
        
    </head>
    <body>
    <div class="under">
<header class="under__content">
<h1 class="under__title">'.$title.'</h1>
<div class="under__text">
'.$message.'
</div>
</header>
<div class="wave"></div>
<div class="wave wave2"></div>
<div class="wave wave3"></div>
</div>

<!-- Analytics Code -->
'.html_entity_decode($system['analytics_code'], ENT_QUOTES).'
<!-- Analytics Code -->

    </body>
    </html>';
    exit;
}


/**
 * get_system_protocol
 * 
 * @return string
 */
function get_system_protocol() {
    $is_secure = false;
    if (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') {
        $is_secure = true;
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
        $is_secure = true;
    }
    return $is_secure ? 'https' : 'http';
}


/**
 * check_system_url
 * 
 * @return void
 */
function check_system_url() {
    $protocol = get_system_protocol();
    $parsed_url = parse_url(SYS_URL);
    if( ($parsed_url['scheme'] != $protocol) || ($parsed_url['host'] != $_SERVER['HTTP_HOST']) ) {
        header('Location: '.SYS_URL);
    }
}


/**
 * is_ajax
 * 
 * @return void
 */
function is_ajax() {
    if( !isset($_SERVER['HTTP_X_REQUESTED_WITH']) || ($_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') ) {
        redirect();
    }
}


/**
 * return_json
 * 
 * @param array $response
 * @return json
 */
function return_json($response = array()) {
    header('Content-Type: application/json');
    exit(json_encode($response));
}


/**
 * modal
 * 
 * @return json
 */
function modal() {
    $args = func_get_args();
    switch ($args[0]) {
        case 'MESSAGE':
            return_json( array("callback" => "modal('#modal-message', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'ERROR':
            return_json( array("callback" => "modal('#modal-error', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        case 'SUCCESS':
            return_json( array("callback" => "modal('#modal-success', {title: '".$args[1]."', message: '".addslashes($args[2])."'})") );
            break;
        default:
            if(isset($args[1])) {
                return_json( array("callback" => "modal('".$args[0]."', ".$args[1].")") );
            } else {
                return_json( array("callback" => "modal('".$args[0]."')") );
            }
            break;
    }
}


/**
 * get_hash_token
 * 
 * @return string
 */
function get_hash_token() {
    return md5(get_hash_number());
}


/**
 * get_hash_number
 * 
 * @return string
 */
function get_hash_number() {
    return time()*rand(1, 99999);
}


/**
 * page_header
 * 
 * @param string $title
 * @param string $description
 * @return void
 */
function page_header($title, $description = '') {
    global $smarty, $system;
    $description = ($description != '')? $description : $system['system_description'];
    $smarty->assign('page_title', $title);
    $smarty->assign('page_description', $description);
}


/**
 * page_footer
 * 
 * @param string $page
 * @return void
 */
function page_footer($page) {
    global $smarty;
    $smarty->assign('page', $page);
    $smarty->display("$page.tpl");
}


?>