<?php
$numbersInArr = 10;

$arr = [];

for ($i = 0; $i < $numbersInArr; ++$i) {
	$arr[] = rand();
}

// print_r($arr);

$maxIndex = 0;
$minIndex = 0;

for ($i = 0; $i < $numbersInArr; ++$i ) {
	if ($arr[$i] > $arr[$maxIndex]) {
		$maxIndex =$i;
	}
	if ($arr[$i] < $arr[$minIndex]) {
		$minIndex = $i;
	}
}

$temp = $arr[$maxIndex];
$arr[$maxIndex] = $arr[$minIndex];
$arr[$minIndex] = $temp;

// print_r($arr);

echo $count . PHP_EOL;

?>