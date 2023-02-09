<?php
    $arquivo = fopen('novos-nomes.txt' , 'w');

    fwrite($arquivo, 'Nickolas Maia');  

    fclose($arquivo);
?>