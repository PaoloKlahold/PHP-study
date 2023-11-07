<?php
$menu = '';
$lista = [];

while ($menu != 's') {
    echo "\nSelecione uma das opções a seguir: ";
    echo "\n(A) Adicionar à lista;";
    if (count($lista) > 1) echo "\n(L) Listar itens;";
    if (count($lista) > 2) echo "\n(R) Randomizar um item da lista;";
    echo "\n(S) Sair";
    $menu = strtolower(readline("\n"));

    switch ($menu){
        case "a":
            $lista[] = readline("\nDigite o que deverá ser adicionado: ");
            break;
        case "l":
            for ($i = 1; $i <= count($lista); $i++){
                echo "\n -".($lista[$i]);
            }
    }
}