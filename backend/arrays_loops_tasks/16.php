<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = '';

foreach ($arr as $number) {
	$result .= $number;
	if ($number != 3 && $number != 9) {
		$result .= ',';
	}
	$result .= ' ';
}

echo $result . PHP_EOL;

?>