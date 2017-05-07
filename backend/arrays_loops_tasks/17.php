<?php
$months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
date_default_timezone_set('UTC');
$month = $months[date('n') - 1];

foreach ($months as $item) {
	if ($item == $month) {
		echo "<b>" . $item . "<b/> ";
	} else {
		echo $item . " ";
	}
}

echo PHP_EOL;

?>