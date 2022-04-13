<?php

# str_contains() -> Esta função verifica se uma palavra/letra Aparece em uma string
# Tem como retorno um bool
$str = "Ola mundo do PHP";
/*

if(str_contains($str,'nd'))
    echo "Sim";
else
    echo "Não";
*/

# str_starts_with():bool -> Esta função verifica se uma string começou com uma determinada letra

# echo (int)str_starts_with($str,'O');

# str_ends_with():bool -> ESta função verifica se uma string termina com uma determinada letra

echo (int)str_ends_with($str,'P');