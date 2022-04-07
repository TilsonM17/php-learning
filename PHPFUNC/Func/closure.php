<?php

# Callable -> É um tipo de Dados, referindo-se a Funções
/*
Ola(function(){
    echo "Ola mundo,isto esta a vir de uma função chamada Ola";
});

function Ola(callable $calback){
    call_user_func($calback);
}
//----------------------------------------------------------------------------------------
echo "<br>";
*/
#Closure -> São funções que usam variaveis de escopo globais
# Sem afectar o valor das mesmas 
$a =10;
$b = 4;

$func = function() use($a,$b){
   echo $a + $b;
   $a = $a *2;
   $b++;
   echo PHP_EOL,$a;
};


$func();
echo PHP_EOL;
echo $a,PHP_EOL,$b;

