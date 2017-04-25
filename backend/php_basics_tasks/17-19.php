<?php
	$a = '78';
	$b = 78;

	if ($a == $b) {
		echo '$a и $b - равны' . PHP_EOL;
	} else {
		echo '$a и $b - не равны' . PHP_EOL;
	}

	if ($a === $b) {
		echo '$a и $b - эквивалентны' . PHP_EOL;
	} else {
		echo '$a и $b - не эквивалентны' . PHP_EOL;
	}


	var_dump($a);
	var_dump($b);
?>