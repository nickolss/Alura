<?php

$aluno2022 = [
    'Joao',
    'Jorge',
    'Maria',
    'Julia',
    'Carlos'
];

$novosAlunos = [
    'Murilo',
    'Matheus',
    'Vanessa'
];

$alunos2023 = [... $aluno2022 , ... $novosAlunos];

var_dump($alunos2023);

/*
    EXPLICAÇÃO

    O operador ... pega um array e tira os [] dele, transformando em dados normais

    No caso, pegou os nomes dos alunos e transformou em dados comuns
*/