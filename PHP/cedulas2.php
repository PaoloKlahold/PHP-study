<?php

$cedulas = [100, 50, 20, 10, 5];

echo "\n As seguintes cedulas estão disponíveis: ";
foreach ($cedulas as $i) {
    echo " ".$i;
}

$valor = readline("\nInsira o valor a ser sacado: ");

if ($valor%5 > 0){
    die("\nNão é possivel realizar o saque");
}

foreach ($cedulas as $i){
    if ($valor >= $i){
        echo "\nCedulas de R$".$i.": ".(floor($valor/$i));
        $valor = ($valor%$i);
    }
}