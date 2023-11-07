<?php

$patinhos = readline('Digite a quantidade de patinhos: ');

while (!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo "o número de patinhos digitado é invalido. É necessário enviar um valor maior que 1 e menor do que 10\n";
     $patinhos = readline('Digite a quantidade de patinhos: ');
}

for($i = $patinhos; $i > 0; $i--){
    if($i == 1){
        echo "\n1 patinho foi passear\n";
        echo "Além das montanhas\n";
        echo "Para brincar\n";
        echo "A mamãe gritou: Quá, quá, quá, quá\n";
        echo "Mas nenhum patinho voltou de lá.\n\n";

        echo "A mamãe patinha foi procurar\n";
        echo "Além das montanhas\n";
        echo "Na beira do mar\n";
        echo "A mamãe gritou: Quá, quá, quá, quá\n";
        echo "E os 5 patinhos voltaram de lá.\n\n";
    } else {
        echo "\n$i patinhos foram passear\n";
        echo "Além das montanhas\n";
        echo "Para brincar\n";
        echo "A mamãe gritou: Quá, quá, quá, quá\n";
        if ($i == 2){
            echo "Mas só 1 patinho voltou de lá.\n";
        } else {
            echo "Mas só ".($i - 1). " patinhos voltaram de lá.\n";
        }
    }
}