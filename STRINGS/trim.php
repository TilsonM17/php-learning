<?php

$str = "ola estou a apreender PHP";

# trim() _ Remove espacos em branco de uma string,da direita como da esquerda.
# echo trim($str);
#rtrim() _ Remove espacos em branco de uma string,da direita.
# echo rtrim($str);      
# Opcionalmente elas podem ter um segundo parametro
# Que vai dizeer quais caracteres serão eliminados

echo ltrim($str,'o');