<?php
	$age = 'test';

	# if (($age == 0 && $age !== 0) || $age < 0) {
	if (($age == 0 && $age !== '0' && gettype($age) == 'string') || $age < 0) {
		echo "Неизвестный возраст";
	} elseif ($age >= 18 && $age <= 59) {
		echo "Вам еще работать и работать";
	} elseif ($age > 59) {
		echo "Вам пора на пенсию";
	} elseif ($age <= 17 && $age >= 0) {
		echo "Вам еще рано работать";
	}
?>