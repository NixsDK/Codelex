<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

// Calculate average value of the numbers
$sum = 0;
$count = count($numbers);

foreach ($numbers as $num) {
    $sum += $num;
}

$average = $sum / $count;

echo "Average value of the numbers: " . $average;
