<?php

class Importer {

	/**
	 * Imports a class that is required for the application to run
	 * @param str $classname Class filepath name
	 */
	static public function requireLib($classname) {
		if (!file_exists(PTL.'class.'.$classname.'.php')) {
			$_PHX['ErrorHandler']->throwFatalError('A required library class was not found: '.$classname);
		}
	}

}