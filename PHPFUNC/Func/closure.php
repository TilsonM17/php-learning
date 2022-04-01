<?php

# Callable -> É um tipo de Dados, referindo-se a Funções

Ola(function(){
    echo "Este OLA mundo meu nome esta vir de uma função chamada Ola";
});

function Ola(callable $calback){
    call_user_func($calback);
}
//----------------------------------------------------------------------------------------
echo "<br>";

#Closure
$a =10;
$b = 4;

$func = function() use($a,$b){
   echo $a + $b;
};


$func();

