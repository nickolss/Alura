<?php

//Esse é um outro método de definir uma String
function geraEmail(string $nome):void
{
    $conteudoEmail = <<<FIM
    Olá, $nome

    Este é um email 

    ASS pessoa
    FIM;
}