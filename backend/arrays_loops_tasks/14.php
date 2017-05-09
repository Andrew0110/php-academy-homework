<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [2, 3, 4];
$haveElementsE = false;

foreach ($arr as $number) {
    if (in_array($number, $e)) {
        $haveElementsE = true;
        break;
    }
}

if ($haveElementsE) {
        echo 'Есть!'.PHP_EOL;
    } else {
        echo 'Нет!'.PHP_EOL;
    }
?>
