<?php
#Quanto a escopo temos,global e Local.
#O escopo Global é aquele que começa desde onde a variavel foi definida
#Ate onde o Documento termina


#O escopo Local é inerente a uma função.
#Para fazer Uso de uma variavel Golbal no escopo Local temos
#de usar a palavra global.
$valor = 10;

function Calcular(){
    global $valor;
    $valor *=10*3;
}

Calcular();

echo $valor,PHP_EOL;

