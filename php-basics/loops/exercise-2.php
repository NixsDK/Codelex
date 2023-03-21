<?php

echo "Input number of terms: ";
$n = trim(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    $result = 1;
    for ($j = 1; $j <= $i; $j++) {
        $result *= $i;
    }
    echo "{$i}^{$i} = {$result}\n";
}
//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function