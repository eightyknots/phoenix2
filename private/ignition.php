<?php

/*
	More definitions
 */



/*
	Start our error stack
 */
require_once(PTL.'class.errors.php');
$_PHX['ErrorHandler'] = new ErrorHandler();

// Import required libraries
Importer::requireLib('something_ridiculous');

?>