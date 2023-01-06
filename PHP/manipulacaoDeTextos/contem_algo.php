<?php

$nome = "Nickolas Maia de Araujo";

//Verifica se tem a palavra "MAIA" na VAR $Nome. Verifica se a palavra está em qualquer lugar da VAR
$Familia = str_contains($nome , "Maia");

if ($Familia){
    echo "$nome é da minha família" . PHP_EOL;
}else{
    echo "$nome não é da minha família";
}