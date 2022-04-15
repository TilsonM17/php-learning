<?php

# Para saber se uma chave existe em um array

$arr_ = [

    'index' => 'home@ola',
    'OLa' => 'home@sobre'
];
/*
if(!array_key_exists('index',$arr_)){
    echo "Não existe!";
}else {
    echo "Existe";
}*/



if(
    in_array( strstr($arr_['index'],'@',true),$arr_)
){
    echo "Existe ", strstr($arr_['index'],'@',true);
}else{
    echo "Não existe ",strstr($arr_['index'],'@',true);;
}