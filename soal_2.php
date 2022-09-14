<?php

function reverse_this($some_str){
	
	if (gettype($some_str) == "array") {
		$some_str = implode($some_str);
	}
	
	if ( ($some_str == null) || (strlen($some_str) <= 1)) {
		echo $some_str;
	} else {
		$index = strlen($some_str) - 1;
		echo $some_str[$index];
		reverse_this(
			substr(
				$some_str, 
				0, 
				($index)
			)
		);
	}
	
}

$r = ["h", "e", "l", "l", "o"];
$r = "hello world";
print_r(reverse_this($r));
?>
