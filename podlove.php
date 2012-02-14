<?php
/*
Plugin Name: Podlove Podcasting Plugin for WordPress
Plugin URI: 
Description: The one and only podcast client. Seriously.
Version: 1.0
Author: Eric Teubert
Author URI: ericteubert@googlemail.com
License: MIT
*/

$correct_php_version = version_compare( phpversion(), "5.3", ">=" );

if ( ! $correct_php_version ) {
	echo "Podlove Podcasting Plugin requires <strong>PHP 5.3</strong> or higher.<br>";
	echo "You are running PHP " . phpversion();
	exit;
}

require_once 'bootstrap/bootstrap.php';
require_once 'lib/helper.php';
require_once 'plugin.php';