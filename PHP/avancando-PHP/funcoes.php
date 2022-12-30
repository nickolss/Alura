<?php
//passagem de parametro por valor
function sacar(float $valor, array $conta) : array{
    if($valor > $conta['saldo']){
        echo "Sando insuficiente";
    }else {
        $conta['saldo'] = -$valor;
        echo "Saldo realizado com sucesso";
    }

    return $conta;

}

function depositar(float $valor, array $conta): array{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    }else{
        echo "Impossível depositar valores negativos";
    }
    
    return $conta;
}


//passagem de parametro por referencia

function transformarLetraEmMaiuscula(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}