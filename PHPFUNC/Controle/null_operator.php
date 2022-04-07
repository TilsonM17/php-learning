<?php

# É um operador para verificar se uma variavel esta nulla
# e se estiver atribui a ela um valor

$var = null;

# $nome = $var?? "blue";

# echo $nome;

 # É uma baita substituição do operador ternario.
 #EX: ifelse Ternario

/* 
  $nome1 = ($var == null)? 'Ola': 'blue';
  echo $nome1;
*/

#EX null Operator
$nome1 = $var ?? 'Ola';
echo $nome1;