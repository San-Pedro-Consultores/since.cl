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
    
    /* assign variables */
    $smarty->assign('view', $_GET['view']);
 
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("index");

?>