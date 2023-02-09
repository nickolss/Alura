<?php
    $arquivoDeNomes = fopen('lista-nomes.txt' , 'r');
    
    stream_filter_append($arquivoDeNomes, 'string.toupper');

    echo fread($arquivoDeNomes , filesize('lista-nomes.txt'))
?>