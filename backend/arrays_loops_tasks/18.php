<?php
$daysOfWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

foreach ($daysOfWeek as $item) {
	if ($item == 'Суббота' || $item == 'Воскресенье') {
		echo "<b>" . $item . "<b/> ";
	} else {
		echo $item . " ";
	}
}

echo PHP_EOL;

?>