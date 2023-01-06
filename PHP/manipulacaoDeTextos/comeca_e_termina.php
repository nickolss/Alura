<?php

$url = 'https://exemplo.com.br';

//str_starts_with verifica se um texto começa com algo. No caso verifica se a VAR $url começa com https.
$validacao = str_starts_with($url , 'https');

if($validacao){
    echo 'URL segura';
}else{
    echo 'URL não segura';
};

//str_ends_with verifica se um texto termina com algo. No caso verifica se a VAR $url termina com .br
$urlBrasileira = str_ends_with($url, '.br');

if ($urlBrasileira){
    echo "É uma URL Brasileira";
}else{
    echo "Não é uma URL Brasileira";
};