<?php
$menu = '';
$lista = [];

while ($menu != 's') {
    echo "\nSelecione uma das opções a seguir: ";
    echo "\n(A) Adicionar à lista;";
    if (count($lista) > 0) echo "\n(L) Listar itens;";
    if (count($lista) > 1) echo "\n(R) Randomizar um item da lista;";
    echo "\n(S) Sair";
    $menu = strtolower(readline("\n"));

    $opcoesValidas = ['a', 'l', 'r', 's'];
    while (!in_array($menu, $opcoesValidas)) {
        $menu = strtolower(readline("\nOpção invalida, favor digitar uma opção existente: "));
    }

    switch ($menu){
        case "a":
            $lista[] = readline("\nDigite o que deverá ser adicionado: ");
            break;
        case "l":
            for ($i = 0; $i < count($lista); $i++){
                echo "\n -".($lista[$i]);
            }
            break;
        case "r":
            $random = array_rand($lista);
            echo "item sortado: ".($lista[$random]);
            unset($lista[$random]);
            break;
    }
}