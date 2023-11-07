<?php
    $continua = 'S';

    while ($continua != 'n' && $continua != 'nao') {
        $valor = readline("\nDigite o valor a ser convertido: ");
        while (is_numeric($valor) != true) {
            $valor = readline("\nValor inválido, deverá digitar um valor numérico: ");
        }
        $unidade = strtolower(readline("\nDigite uma unidade de medição (mm / cm / m / km): "));
        while ($unidade != "mm" && $unidade != "cm" && $unidade != "m" && $unidade != "km"){
            $unidade = strtolower(readline("\n Unidade inválida, favor digitar uma das opções (mm / cm / m / km): "));
        }

        switch ($unidade){
            case "mm":
                echo "\nPara cm: ".($valor / 10)." cm";
                echo "\nPara m: ".($valor / 1000)." m";
                echo "\nPara km: ".($valor / 1000000)." km";
                break;
            case "cm":
                echo "\nPara mm: ".($valor * 10)." mm";
                echo "\nPara m: ".($valor / 100)." m";
                echo "\nPara km: ".($valor / 100000)." km";
                break;
            case "m":
                echo "\nPara mm: ".($valor * 1000)." mm";
                echo "\nPara cm ".($valor * 100)." cm";
                echo "\nPara km ".($valor / 1000)." km";
                break;
            case "km":
                echo "\nPara mm: ".($valor * 1000000)." mm";
                echo "\nPara cm: ".($valor * 100000)." cm";
                echo "\nPara m: ".($valor * 1000)." m";
                break;
        }
        $continua = strtolower(readline("\nVocê deseja realizar outra conversão? (S/N)"));
        while ($continua != "n" && $continua != "s"){
            $continua = strtolower(readline("\nDigite uma opção váida (S/N): "));
        }
    }