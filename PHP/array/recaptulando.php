<?php

$numeros = [
    'um' => 1,
    'dois' => 2,
    'tres' => 3
];

//nomeNumero é a chave do array
foreach ($numeros as $nomeNumero => $numero){
    var_dump ($numero . PHP_EOL);
}