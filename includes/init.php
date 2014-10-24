<?php
session_start();

$GLOBALS['config'] = array( 
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'devcorner'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 1209600
	),
	'session' => array(
		'session_name' => 'user'
	),
);


spl_autoload_register(function($class){
	require_once 'includes/classes/'.$class.'.php';
});

require_once '/includes/functions/sanitize.php';

?>