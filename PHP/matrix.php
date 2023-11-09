<?php

$varmatrix = [[], []]; // Initialize an empty 2x2 matrix

for ($i = 0; $i < 2; $i++) {
    echo "$i: ".($i)."\n";
    for ($j = 0; $j < 2; $j++) {
        $varmatrix[$i][$j] = $i * 2 + $j + 1; // Populate the matrix with values
    }
}

print_r($varmatrix); // Print the matrix
echo($varmatrix[0][0]);