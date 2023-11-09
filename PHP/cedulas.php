<?php
    echo ("\nSomente é possivel receber cedulas no valor de R$5 R$10 R$20 R$50 e R$100");
    $valor = readline("\nDigite o valor a ser sacado: ");

    if ($valor >= 100){
        $qnt_100 = floor($valor/100);
        $valor = ($valor%100);

    }
    if ($valor >= 50) {
        $qnt_50 = floor($valor/50);
        $valor = ($valor%50);

    }
    if ($valor >= 20) {
        $qnt_20 = floor($valor/20);
        $valor = ($valor%20);

    }
    if ($valor >= 10) {
        $qnt_10 = floor($valor/10);
        $valor = ($valor%10);

    }
    if ($valor >= 5) {
        $qnt_5 = floor($valor/5);
        $valor = ($valor%5);

    } 
    if ($valor != 0) {
        echo "\n\nNão é possivel realizar a transferência";
    } else {
        if ($qnt_100 > 0) echo "\nNotas de 100: ".($qnt_100);
        if ($qnt_50 > 0) echo "\nNotas de 50: ".($qnt_50);
        if ($qnt_20 > 0) echo "\nNotas de 20: ".($qnt_20);
        if ($qnt_10 > 0) echo "\nNotas de 10: ".($qnt_10);
        if ($qnt_5 > 0) echo "\nNotas de 50: ".($qnt_5);
    }
