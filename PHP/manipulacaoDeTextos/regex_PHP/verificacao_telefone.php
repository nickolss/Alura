<?php

$regex = '/^\(\d{2}\) ?\d{5}\-\d{4}$/';

$telefones = [
    '(11) 99999-9999',
    '(41) 89898-8894',
    '(13) 77757-1247'
];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        $regex, //REGEX
        $telefone //VAR
    );

    if($telefoneValido){
        echo "Telefone Válido" . PHP_EOL;
    }else{
        echo "Telefone Inválido" . PHP_EOL;
    }
}