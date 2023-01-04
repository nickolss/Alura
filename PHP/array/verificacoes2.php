<?php

$notasChaveComplexa = [
    'Vinicius' => null,
    'Ana' => 10,
    'Joao' => 7,
    'Maria' => 9
];

/*
    EXPLICAÇÃO

    array_key_exists = Verifica se existe uma chave
    EX: array_key_exists('Vinicius' , $notasChaveComplexa); TRUE

    isset = Verifica se uma chave existe E se ela não é nula
    EX: isset('Vinicius' , $notasChaveComplexa); FALSE

    in_array = Verifica se tem um valor dentro de um Array
    EX: in_array(10, $notasChaveComplexa); TRUE

    array_search = Retorna uma chave procurando por um valor específico
    EX: array_search(10, $notasChaveComplexa); ANA
        Em outras palavras, procura alguem que tirou 10
*/