<?php

$conta1 = [
    'titular' => 'Nickolas',
    'cpf' => '123.456.789-10',
    'saldo' => 1.520
];


$conta2 = [
    'titular' => 'Cleiton',
    'cpf' => '597.410.459-88',
    'saldo' => 3.200
];

$contas = [$conta1, $conta2];

for ($i=0; $i < count($contas) ; $i++) {
    echo $contas[$i]['titular'];
}
