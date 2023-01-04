<?php

$notasChaveComplexa = [
    'Vinicius' => 5,
    'Ana' => 10,
    'Joao' => 7,
    'Maria' => 9
];

//Verifica se a VAR é um Array
echo is_array($notasChaveComplexa);

//verifica se é um array com chave simples, ou array de lista
echo is_array_list($notasChaveComplexa); 

/*Array de lista:

    $numeros = [
        0 => 4,
        1 => 1,
        2 => 5
    ]

    ou seja, chaves crescentes que começam do 0
*/