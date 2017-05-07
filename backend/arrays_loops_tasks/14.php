<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 2;

foreach ($arr as $number) {
	if ($number == $e) {
		echo 'Есть!'.PHP_EOL;
	} else {
		echo 'Нет!'.PHP_EOL;

	}
}

?>