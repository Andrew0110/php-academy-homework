<?php
$daysOfWeek = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
date_default_timezone_set('UTC');
$day = $daysOfWeek[date('w') - 1];

foreach ($daysOfWeek as $item) {
	if ($item == $day) {
		echo "<i>" . $item . "<i/> ";
	} else {
		echo $item . " ";
	}
}

echo PHP_EOL;

?>