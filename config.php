<?php
require 'environment.php';

define("BASE_URL", "http://localhost/www/sistemas-intermediario/CMS/");

global $config;
$config = array();

if(ENVIRONMENT == "development"){
	$config['dbname'] = 'cms';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	$config['dbname'] = 'cms';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>