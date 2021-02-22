<?php
/**
 * ajax -> core -> signin
 * 
 * @package tsubit.com
 * @author tsubit.com
 */


// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();


try {

	// signin
	$remember = (isset($_POST['remember'])) ? true : false;
	$user->sign_in($_POST['username_email'], $_POST['password'], $remember);

	// return
	return_json( array('callback' => 'window.location.reload();') );
	
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>