<?php

# array_filter() -> função para passar um filtro em um array

$_ = [
   1,
   5,
   73,
   23,
   76
];


print_r( array_filter($_,'calcularParcela') );

function calcularParcela($valor2){
    return $valor2;
}