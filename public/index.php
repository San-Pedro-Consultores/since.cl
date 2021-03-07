<?php
/**
 * index
 * 
 * @package tsubit.com
 * @author tsubit.com
 */

// fetch bootloader
require('bootloader.php');

try {
    
    // get view content
    switch ($_GET['view']) {
        case '':
            // page header
            page_header($system['system_title']);
        break;
        
        default:
        _error(404);
        break;
    }
    
    $rbd = $_GET['rbd'];
    $salt = "GedgafmgTicSimce2016";
    $archivo = "jsonSimce/ficha-".$rbd."_".md5($salt.base64_encode("ficha-".$rbd.".json")).".json";

    /* assign variables */
    $smarty->assign('view', $_GET['view']);
    $smarty->assign('fecha', $_GET['fecha']);
    $smarty->assign('rbd', $rbd);
    $smarty->assign('archivo', $archivo);
 
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("index");

?>