<?php
// fscanf(STDIN, "%d\n", $number);
$number = 442158755745;

$needle = 5;
$count = 0;

for ($i = $number; $i > 0; $i = floor($i/10) ) {
	if ($i % 10 == $needle) {
		++$count;
	}
}

echo $count . PHP_EOL;

?>