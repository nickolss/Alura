<?php

$notasBimestre1 = [
    'Vinicius' => 4,
    'Ana' => 10,
    'Joao' => 7,
    'Maria' => 9,
    'Carlos' => 2
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'Ana' => 10,
    'Joao' => 7,
    'Maria' => 9
];

/*
    EXPLICAÇÃO

    array_diff = Compara a diferença entre os valores das chaves
    EX: array_diff($notasBimestre1, $notasBimestre2); VINICIUS

    array_diff_key = Compara a diferença das chaves entre arrays
    EX: array_diff_key($notasBimestre1, $notasBimestre2) CARLOS 

    array_diff_assoc = Compara a diferença das chaves e valores entre arrays
    EX: array_diff_assoc($notasBimestre1, $notasBimestre2); VINICIUS, CARLOS
*/
