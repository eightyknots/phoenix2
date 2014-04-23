<?php

/**
 * Phoenix2 launcher file
 *
 * @package Phoenix2
 * @author Chester Li <yectep@gmail.com>
 * @version 0.0.1
 */

/*
###############################################################
################# DO NOT EDIT BELOW THIS LINE #################
###############################################################
 */
define('PHX_VERSION',		'0.0.1');
define('PHX_PTP',			'../private/');
define('PHX_PTA',			'./assets/');

// If configuration file doesn't exist, notify the user
if (!file_exists(PHX_PTP.'config.json')) {
	die('Error: Configuration file not found.');
}

require_once(PHX_PTP.'config.json');
require_once(PHX_PTP.'ignition.php');

?>