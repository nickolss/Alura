<?php

require 'funcoes.php';

$conta1 = [
    'titular' => 'Nickolas',
    'cpf' => '123.456.789-10',
    'saldo' => 1520
];


$conta2 = [
    'titular' => 'Cleiton',
    'cpf' => '597.410.459-88',
    'saldo' => 3200
];

$contas = [$conta1, $conta2];

foreach($contas as $conta){
    transformarLetraEmMaiuscula($conta);
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    
    //ou
    //list ('titular' => $titular, 'saldo' => $saldo] = $conta)

    echo "$titular com saldo de $saldo" . PHP_EOL;
}