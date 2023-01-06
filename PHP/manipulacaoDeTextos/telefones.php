<?php

$telefones = [
    '(11) 99999-9999',
    '(41) 89898-8894',
    '(13) 77757-1247'
];

//O implode pega um Array e transforma em String. O primeiro parametro é o separador e o segundo o Array.
echo implode(',' , $telefones);
