<?php

$tamanho = (int)readline("Digite o tamanado da senha (entre 6 e 60)");

$caracteres = [];
if(readline("Permitir letras maiúsculas? (s/n)") == 's') {
    $caracteres = array_merge($caracteres, range('A', 'Z'));
}
if(readline("Permitir letras minúsculas? (s/n)") == 's') {
    $caracteres = array_merge($caracteres, range('a', 'z'));
}
if(readline("Permitir digitos? (s/n)") == 's') {
    $caracteres = array_merge($caracteres, range(0, 9));
}
if(count($caracteres) == 0){
    die("Deve haver ao menos uma opção permitida");
}

shuffle($caracteres);
$senha = array_slice($caracteres,0,$tamanho); 

print_r($senha);