<?php
$saida = '';
while ($saida != 'n' && $saida != 'nao' && $saida != 'no'){
    $valor = readline("\nDigite somente o valor a ser convertido: ");
    while (is_numeric($valor) == false) {
        $valor = readline("\nO valor inserido não é um número, por favor digite um número válido: ");
    }
    $unidade = strtolower(readline("\n Digite a unidade de medida (mm / cm / m / km) :"));
    while ($unidade != 'mm' && $unidade != 'cm' && $unidade != 'm' && $unidade != 'km') {
        $unidade = strtolower(readline("\n A unidade de medida inserida não é valida, por favor inserir uma das opções (mm / cm / m / km): "));
    }
    echo $valor.$unidade;
    switch ($unidade) {
        case 'mm':
            echo "\nPara cm: ".($valor / 10)."cm";
            echo "\nPara m: ".($valor / 1000)."m";
            echo "\nPara km: ".($valor / 1000000)."km";
            break;
        case 'cm':
            echo "\nPara mm: ".($valor * 10)."mm";
            echo "\nPara m: ".($valor / 100)."m";
            echo "\nPara km: ".($valor / 100000)."km";
            break;
        case 'm':
            echo "\nPara mm: ".($valor * 1000)."mm";
            echo "\nPara cm: ".($valor * 100)."cm";
            echo "\nPara km: ".($valor / 1000)."km";
            break;
        case 'km':
            echo "\nPara mm: ".($valor * 1000000)."mm";
            echo "\nPara cm: ".($valor * 100000)."cm";
            echo "\nPara m: ".($valor * 1000)."m";
            break;
    }

    $saida = strtolower(readline("\nVocê deseja realizar outra conversão? (S/N): "));
    while ($saida != 'n' && $saida != 'nao' && $saida != 'no' && $saida != 's' && $saida != 'sim' && $saida != 'yes') {
        $saida = strtolower(readline("\nPor favor digite uma resoposta válida (S/N): "));
    }
}