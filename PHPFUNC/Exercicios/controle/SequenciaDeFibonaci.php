<?php

# Calcular a Sequencia de Fibonache
# 
$soma = 0;
function SequenciaFibonaci(int $voltas) : array {
    $index = 0;                                                     
    $sequencia = [];
    while($index < $voltas){
        if($index = 0){
            $parcela1 = 1; 
        }
        #Achar a parcela 2
        $parcela2 = $parcela1 +1;
        #Achar o numero da sequencia
        $soma = $parcela1 + $parcela2;

        array_push($sequencia,$soma);
        
        $index++;
    }

    return $sequencia;
}


print_r(SequenciaFibonaci(4));
