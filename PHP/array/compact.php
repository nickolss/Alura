<?php 

$nome = "Nickolas";
$idade = 15;
$nota = 10;


//A função Compact transforma VAR em Array
$dados = compact('nome', 'idade', 'nota');
var_dump($dados);
