<?php
# list e extract são funções para extrair variaveis de um array
# Parece que o list apenas serve para array simplis
$array = ['Teste','OLa'];

list($n1,$n2) = $array;

echo $n1,PHP_EOL;
echo $n2,PHP_EOL;

#O extract
 $arr_ = [
     'dados' => [
         'nome' =>'Tilson',
         'idade' => 23,
         'Morada' => 'Viana'
     ]
 ];

 extract($arr_);
 print_r($dados);