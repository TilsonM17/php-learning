<?php

# array_map() -> Serve para mapear um array com uma função de callback

$_ = [
    5,
    14,
    28,
    64,
    13
];

print_r(array_map(function($valor){
 return $valor+2;
},$_));
