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

//Adiciona elementos ao final do Array
array_push($novosAlunos, 'Bianca');

//Adiciona elementos no começo do Array
array_unshift($aluno2022, 'Roberto');

//Remove o primeiro elemento do começo do Array
array_shift($novosAlunos);

//Remove o ultimo elemento do final do array
array_pop($aluno2022);
