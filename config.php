<?php

	require 'everionment.php';

	global $config;

	$config = array();

	$base_url = "http://" . $_SERVER['HTTP_HOST'];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
	define('BASE_URL', $base_url);


	if(EVERIONMENT == 'development') {
		$config['host'] = '';
		$config['dbname'] = '';
		$config['login'] = '';
		$config['senha'] = '';
	}
 ?>
