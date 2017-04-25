<?php
	$s = 180;
	$t = 3;

	$speedInKmh = $s / $t;
	$speedInMps = $speedInKmh / 3.6;
	echo "Speed of car - " . $speedInKmh . " Kmh (" . round($speedInMps, 2) . " m/s)";
?>