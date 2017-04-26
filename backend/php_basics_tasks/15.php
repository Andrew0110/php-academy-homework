<?php
	$a = 100;
	$b = 0;
	$operator = '/';

	$result = '';
	switch ($operator) {
		case '+':
			$result = $a + $b;
			break;
		case '-':
			$result = $a - $b;
			break;
		case '/':
			if ($b != 0) {
				$result = $a / $b;
			} else {
				$result = 'Division by Zero (-:';
			}
			break;
		case '*':
			$result = $a * $b;
			break;
		case '%':
			if ($b != 0) {
				$result = $a % $b;
			} else {
				$result = 'Division by Zero (-:';
			}
			break;

		default:
			$result = 'Please input real operator (-;';
			break;
	}

	echo $result . PHP_EOL;
?>