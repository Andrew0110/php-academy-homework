<?php
$maxCells = 10;

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$cols = rand(1, $maxCells);
$row = rand(1, $maxCells);

$result = '<table>';

for ($i = 0; $i < $row; ++$i ) {
	$result .= '<tr>';
	for ($j=0; $j < $cols; $j++) { 
		$color = $colors[rand(0, count($colors)-1)];
		$number = rand();
		$result .= "<td style=\"background-color:{$color}\">{$number}</td>";
	}
	$result .= '<tr>';
}
$result .= '</table>';

echo $result . PHP_EOL;

?>