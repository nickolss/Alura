<?php
    $arquivo = fopen('novos-nomes.txt' , 'a');

    fwrite($arquivo , "\nMaria Clara");
    fclose($arquivo);
?>