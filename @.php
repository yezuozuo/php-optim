<?php

require __DIR__ . '/Public.php';

function test() {

}

$time_start = microtime_float();
for ($i = 0; $i < TIMES; $i++) {
    @test();
}

$time_end = microtime_float();
$time     = $time_end - $time_start;
echo $time;
echo "\n";

$time_start = microtime_float();
for ($i = 0; $i < TIMES; $i++) {
    test();
}

$time_end = microtime_float();
$time     = $time_end - $time_start;
echo $time;
echo "\n";