<?php

$arr = [1,2,3,4,54,56,6,7,8,89,9,00,0,3554,67,678,789];
/*
#Usando o break para parar a execução do Codigo!
foreach($arr as $a){
    if($a == 6){
        echo "---------------------------------","<br>";
        echo $a;
        break;
    }
    echo $a,"<br>";   
}
*/

#Usando o Continue para pular para a proxima iteração
foreach($arr as $a){
    if($a == 1 or $a == 54)
        continue ;
    echo $a,PHP_EOL;
}




#Usando o goto para pular a execução de um codigo
#Muito fracil de USar, parece ate daquele filme Junper.
/*foreach($arr as $i){
    if($i == 4){
        goto fun;
    }
    echo $i,"<br>";
}


function Testar(){
    echo "Vim frazer a $##% de uma cena qualquer que não sei";
}

fun:
Testar();*/
