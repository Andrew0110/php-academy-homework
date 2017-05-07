<?php

function getBitCapacity($value) {
	$result = 0;
	for ($i = $value; $i > 0; $i = floor($i/10), ++$result);

	return $result;
}

function getCell($num, $widthOfCell) {
	$cell = '';
	$numberOfSpaces = $widthOfCell - getBitCapacity($num);
	$cell .= str_repeat(' ', $numberOfSpaces);
	$cell .= $num . '|';
	return $cell;
}

function getLine($widthOfCell, $numOfColumns) {
	$result = '+';
	for ($i=0; $i < $numOfColumns; ++$i) { 
		$result .= str_repeat('-', $widthOfCell) . '+';
	}
	$result .= PHP_EOL;
	return $result;
}

$min = 3;
$max = 10;

$widthOfCell = getBitCapacity($max*$max);
$numOfColumns = $max - $min + 2;
$result = getLine($widthOfCell, $numOfColumns);

for ($i = $min-1; $i <= $max; ++$i) {
	$initNum = $i;
	if ($i == $min-1) {
		$initNum = 1;
		$result .= '|' . str_repeat(' ', $widthOfCell) . '|';
	} else {
		$result .= '|' . getCell($initNum, $widthOfCell);
	}
	for ($j=$min; $j <= $max; $j++) { 
		$multiple = $initNum*$j;
		$result .= getCell($multiple, $widthOfCell);
	}
	$result .= PHP_EOL;
	$result .= getLine($widthOfCell, $numOfColumns);
}
echo $result;

?>