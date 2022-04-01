<?php
# O Perador match foi introduzido no php 8
# Serve como uma estrutura de condição Swith, simplificada
# Alem da sua simplicidade o match faz uma comparação de identico '==='
# Já o switch faz uma de igualdade '==' 

# EX usando o switch


switch('1'){
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
       echo "Nada a relatar";
       break;
}


echo "<hr>";

echo match('2'){
    1 => '1',
    2 => '2',
    default => 'Nada a relatar'
};

/**------------------------------------------------------------------------------------ */


















