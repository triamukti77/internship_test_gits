<?php
// Enter your code here, enjoy!

function bracket_ballance(string $some_string){
	$i = 0;
	$clear = true;
	$opened = [];
	$current = "";
	
	$str_to_array = str_split($some_string);
	
	while($i < count($str_to_array)){
		
		$current = $str_to_array[$i];
		$i++;
		if ($current == "{" || $current == "[" || $current == "(" ) {
			array_push($opened, $current);
			continue;
		}
		
		$last = array_slice($opened, -1, 1)[0];
		switch ($current) {
			case '}':
				if ($last != '{') {
					$clear =  false;
				}
			break;
				
			case ']':
				if ($last != '[') {
					$clear =  false;
				}
			break;
				
			case ')':
				if ($last != '(') {
					$clear =  false;
				}
			break;
			
			default:
				// code...
			break;
		}
		
		array_pop($opened);
	}
	return ($clear) ? "YES" : "NO";
}

$input = "{[(])}";
echo bracket_ballance($input);
?>
