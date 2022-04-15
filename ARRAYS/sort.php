<?php

# sort() -> Serve para ordenar uma array
/**
 * 1 - Numeros Inteiros
 * 2 - Strings por orden Alfabetica
 * 3- Bool
 * 4 - floats
 */
$arr = array('Tilson' => ['ola'],'Aline','Wilson',123,'Andere',true,1.4);


sort($arr);

print_r($arr);

