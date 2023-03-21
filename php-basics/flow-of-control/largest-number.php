<?php

echo "Input the 1st number: ";
$num1 = trim(fgets(STDIN));

echo "Input the 2nd number: ";
$num2 = trim(fgets(STDIN));

echo "Input the 3rd number: ";
$num3 = trim(fgets(STDIN));

//todo print the largest number
if ($num1 > $num2 && $num1 > $num3) {
    echo "{$num1} is the largest number";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "{$num2} is the largest number";
} else {
    echo "{$num3} is the largest number";
}
