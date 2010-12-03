<?php
Class B {
	function __construct () {}
	static function Move ($dir, $n, $cb) {
		$y = MP::p();
		if ($n == 1) {
			foreach (TM::$T as $code => $alpha) {
				MP::$b .= 'TM::Q(\''.$y.'_'.$code.'\','.$code.','.$dir.',\''.$cb.'\');'."\n";
			}
			return $y;
		}
		foreach (TM::$T as $code => $alpha) {
			MP::$b .= 'TM::Q(\''.$y.'_'.$code.'\','.$code.','.$dir.',\''.MP::n($y).'\');'."\n";
		}
		B::Move($dir, $n-1, $cb);
	}
}
