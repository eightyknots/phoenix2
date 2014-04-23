<?php

class Importer {

	private $eh = new ErrorHandler();

	/**
	 * Imports a class that is required for the application to run
	 * @param str $classname Class filepath name
	 */
	static public function requireLib($classname) {
		if (!file_exists(PTL.'class.'.$classname.'.php')) {
			self::fatal('A required library class was not found: '.$classname);
		}
	}

	static public function fatal($msg) {
		$eh = new ErrorHandler();
		$eh->throwFatalError($msg);
	}

}