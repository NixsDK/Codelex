<?php

echo "Enter the number: ";
$num = trim(fgets(STDIN));

if ($num > 0) {
    echo "{$num} is a positive number";
} elseif ($num < 0) {
    echo "{$num} is a negative number";
} else {
    echo "{$num} is zero";
}

//todo print if number is positive or negativeodo print if number is positive or negative