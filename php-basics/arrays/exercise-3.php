<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
//todo check if an array contains a value user entered
// read user input from console
$searchValue = trim(fgets(STDIN));

if (in_array($searchValue, $numbers)) {
    echo "{$searchValue} exists in the array";
} else {
    echo "{$searchValue} does not exist in the array";
}
