<?php
# Generator -> É uma função normal como as outras mas que permite gerar Valores
# Dai o nome Generators,
#Diferente de Return a expressão yield para onde ele parrou

function GerarNumero(int $limit){
    for($i = 0; $i < $limit; $i++){
        yield $i;
    }
}

  foreach(GerarNumero(10) as $i){
    echo $i,"<br>";   
  }

  echo "<hr>";
  foreach(GerarNumero(10) as $i){
       echo $i,"<br>";
}