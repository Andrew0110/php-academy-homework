<?php
$numbersInArr = 10;

$arr = [];

for ($i = 0; $i < $numbersInArr; ++$i) {
	$arr[] = rand(-100, 100);
}

print_r($arr);


$mult = 1;
$result = '';

for ($i = 0; $i < $numbersInArr; ++$i ) {
	if ($arr[$i] > 0) {
		if ($i % 2 == 0) {
			$mult *= $arr[$i];
		} else {
			$result .= $arr[$i] . ' ';
		}
		
	}
	
}

// print_r($arr);

echo $mult . PHP_EOL;
echo $result . PHP_EOL;

?>