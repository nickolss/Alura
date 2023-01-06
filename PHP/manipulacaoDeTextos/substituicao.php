<?php

$texto = "Esse é um texto aleatorio, FRASE SUBSTITUIDA";

//Troca FRASE SUBSTITUIDA por *
$textoSubstituido = str_replace("FRASE SUBSTITUIDA" , "*" , $texto);

echo $textoSubstituido;