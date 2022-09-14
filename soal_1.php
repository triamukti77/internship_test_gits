<?php
function count_one(array $count_this){
	$i = 0;
	$count = 0;
	$max = 0;
	while($i < count($count_this)){
		if ($count_this[$i] == 1) {
			$count++;
		} else {
			$max = ($count > $max) ? $count : $max;
			$count = 0;
		}
		$i++;
	}
	return $max;
}

$input = [#input array here];
echo count_one($input);
?>
