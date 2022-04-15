<?php

# O count -> Serve para contar o numero de elementos em um array.

$arr_ = [
    'dados' => [
        'nome',
        'idade',
        'sexo'
    ],
    'outros' => [
        'ola',
        'isso',
        'teste'
    ]

];


echo count($arr_),PHP_EOL; # COUNT_NORNAL vai retornar 2
echo count($arr_,1); # Vai contar de maneira recursiva e vai retornar 8