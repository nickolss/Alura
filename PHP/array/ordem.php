<?php

$notas = [
    8,
    4,
    5,
    7,
    9,
    10
];

$notasOrdenadas = $notas;

sort($notasOrdenadas);

echo "Notas Desordenadas: ";
foreach ($notas as $notasDesordenadas){
    echo $notasDesordenadas . ",";
}

echo "Notas Ordenadas: ";
foreach ($notasOrdenadas as $notas){
    echo $notas . ",";
}