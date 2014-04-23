<?php

define('PHX_ERROR_LEVEL_INFO',	0);
define('PHX_ERROR_LEVEL_WARN',	1);
define('PHX_ERROR_LEVEL_ERROR',	2);
define('PHX_ERROR_LEVEL_FATAL',	3);

class ErrorHandler {

	private $errStack, $minOutputLevel;

	public function __construct() {
		$this->minOutputLevel = ((PHX_TYPE == "production") ? 3 : 0);
		$this->errStack = array();
		$this->pushToStack('ErrorHandler initialized peacefully.', 0, PHX_ERROR_LEVEL_INFO);
	}

	public function pushToStack($msg, $errcode == 0, $level == PHX_ERROR_LEVEL_WARN) {
		array_push($this->errStack, array("msg" => $msg, "code" => $errcode, "level" => $level);
	}

	public function showStack() {
		$output = ''; $max = sizeof($this->errStack)-1;
		foreach ($this->errStack as $id => $item) {
			if ($item['level'] >= $this->minOutputLevel) {
				$output .= '['.str_pad($id, strlen($max), ' ', STR_PAD_LEFT).'] ['.$item['code'].'] '.$item['msg']."\n";
			}
		}
	}

	public function fatal($msg) {
		$this->pushToStack($msg, 100, PHX_ERROR_LEVEL_FATAL);
		header('Content-Type: text/plain');
		header('HTTP/1.1 500 Internal Server Error');
		echo $this->showStack();
	}
}

?>