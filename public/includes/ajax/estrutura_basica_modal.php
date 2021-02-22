<?php 

/**
 * ajax -> modal -> modal_config
 * 
 * @package tsubit.com
 * @author tsubit.com
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();


try {

	// initialize the return array
	$return = array();
    $return['callback'] = 'window.location.replace(response.path);';
    
    // iniciar
    $return['modal_config'] = $smarty->fetch("ajax/modal_config.tpl");
    $return['callback'] = "$('#modal').modal('show'); $('.modal-content:last').html(response.modal_config); initialize_modal();";

    // return & exit
	return_json($return);

} catch (Exception $e) {
	modal("ERROR", __("Error"), $e->getMessage());
}

?>