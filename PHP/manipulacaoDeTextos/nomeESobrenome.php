<?php

$nomeCompleto = "Nickolas Maia de Araújo";

//explode separa a VAR e, juntando com a função LIST, pode atribuir a novas variáveis.
[$nome , $sobrenome ] = explode(' ' , $nomeCompleto, 2); //Esse dois é para falar que só podem 2 separações no maximo, ou seja, Nome e Sobrenome.

echo "Nome: $nome" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;
