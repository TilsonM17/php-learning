<?php
# array_push() -> add valores no final de um array

$arr_ = [
    'Tilson',
    '23',
    'viana',
    'footboll',
    'Angola'
];

$array = array_push($arr_,'oi'); # REtorna o total de elementos de um array



# array_pop() -> Deletar o ultimo elemento de um array
# array_pop($arr_); # Alterar o array deletando o ultimo elemento


# array_shift() -> Deleta o primere elemento do array
  #  array_shift($arr_); # Alterar o array deletando o ultimo elemento

# array_unshift() -> Add um elemento no principio de um arry
 #  array_unshift($arr_,'Novo el');

print_r($arr_);