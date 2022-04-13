<?php
# Pegar e separar os numero que estão nesta string e apresentar
# Isso indepentemente de os numero estarem no fim ou no inicio(depois do =)
$str2 = "__HOST=DUHFYU387429347893457483743845345tFHYUIDF";

$str2 = substr($str2, strpos($str2,"=") + 1); #Retirar uma parcela da str depois do =
$arr_palavras = []; #array onde ira conter as palavras
$arr_ = str_split($str2); #transformar a parcela em array
$arr_numerico = [
    1,2,3,4,5,6,7,8,9
]; # Criar um array para comparar


# Uma iteraçao de 2 camadas para comparar a ocorrencia de $arr_numerico com $arr_
foreach($arr_ as $item){
    foreach($arr_numerico as $num){
        if($num == $item){
            array_push($arr_palavras,$item); # Colocar os capturados em um array
        }
    }    
}
echo "Numeros capturados";
echo "-------------------------------------------------------";
echo PHP_EOL;
print_r($arr_palavras); # Imprime os numeros