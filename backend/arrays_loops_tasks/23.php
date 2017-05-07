<?php
fscanf(STDIN, "%d\n", $number);

$sum = 0;

// for ($i = $number; $i > 0; $i = floor($i/10) ) {
// 	$sum += $i % 10;
// }

$numInStr = (string)$number;
for ($i = 0; $i < strlen($numInStr); ++$i ) {
	$sum += $numInStr[$i];
}

echo $sum . PHP_EOL;

?>