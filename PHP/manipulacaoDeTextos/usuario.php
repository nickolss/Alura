<?php 

$usuario = "nickolas@gmail.com";
$senha = 155;


//mb_strlen conta a quantidade de caracteres de uma String
if (mb_strlen($senha) < 8){
    echo "Senha com menos de 8 caracteres";
}

//strpos procura a posição de um caracter dentro de uma String
$posicaoDoArroba = strpos($usuario , '@');

//substr cria uma nova String a partir de pedaços de outras com os parametros substr($var, inicio, fim)
$nomeDoUsuario = substr($usuario , 0 , $posicaoDoArroba);

$dominio = substr($usuario, $posicaoDoArroba +1);

echo $nomeDoUsuario;
echo PHP_EOL;
echo $dominio;

/* 
    FUNÇÕES EXTRAS

    mb_strtoupper deixa a String toda em Maiúscula
    mb_strtolower deixa a String toda em minúscula
*/