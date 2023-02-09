<?php

    $arquivo = fopen('lista-nomes.txt' , 'r');
    $tamanhoArquivo = filesize('lista-nomes.txt');
    $nomes = fread($arquivo, $tamanhoArquivo);

    echo $nomes;

    fclose($arquivo);
?>