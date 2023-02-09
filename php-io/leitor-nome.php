<?php
    $arquivo = fopen('lista-nomes.txt' , 'r');

    while(!feof($arquivo)){
        $nome = fgets($arquivo);

        echo $nome;
    }
?>