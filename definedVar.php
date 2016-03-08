<?php

require __DIR__ . '/Public.php';

$a = null;
$time_start = microtime_float();
for ($i = 0; $i < TIMES; $i++) {
    $a = 1;
}

$time_end = microtime_float();
$time     = $time_end - $time_start;
echo $time;
echo "\n";

$time_start = microtime_float();
for ($i = 0; $i < TIMES; $i++) {
    $b = 1;
}

$time_end = microtime_float();
$time     = $time_end - $time_start;
echo $time;
echo "\n";