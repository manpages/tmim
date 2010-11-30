<?php
	Class MP {
		//current state number
		static $i = "0000010000";
		static function p() {
			$j = 0;
			while ($j < count(MP::$i)) {
				if (MP::$i{$j} == "0") {
					MP::$i{$j} = 1;
					return;
				}
				MP::$i{$j} = "0";
				++$j;
			}
			return;
		}
	}
?>
