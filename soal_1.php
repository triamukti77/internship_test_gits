<?php
function count_one(array $count_this){
	$i = 0;
	$count = 0;
	while($i < count($count_this)){
		if ($count_this[$i] == 1) {
			$count++;
		} else {
			$count = 0;
		}
		$i++;
	}
	return $count;
}
?>
