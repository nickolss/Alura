<?php

$notas = [
    [
        'nome' => 'Maria',
        'nota' => 7        
    ],

    [
        'nome' => 'Lucas',
        'nota' => 4        
    ],

    [
        'nome' => 'Cleiton',
        'nota' => 10        
    ]
];

function ordenarNotas(array $nota1, array $nota2):int{
    /*
    if($nota1['nota'] < $nota2['nota']){
        return -1;
        //esse -1 faz ir para frente na função, então ela vai ordenar da menor para a maior nota
    }

    if($nota1['nota'] > $nota2['nota']){
        return 1;
    }

    return 0; */

    //ou

    return $nota1['nota'] <=> $nota2['nota'] ;
    //ordena de forma crescente
        /*
            EXPLICANDO <=>
            Se < retorna -1
            Se == retorna 0
            Se > retorna 1
        */
}

usort($notas, 'ordenarNotas');
var_dump($notas);