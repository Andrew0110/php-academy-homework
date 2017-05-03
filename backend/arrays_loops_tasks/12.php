<?php
$n = 1000;

$num = 0;
for (; $n >= 50; $n/=2, ++$num);
echo $num . PHP_EOL;

?>