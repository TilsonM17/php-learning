<?php

# Existe ao Total 8 constantes magicas
# A função dirname() -> Retorna o directorio pai
echo  dirname(__FILE__);
echo PHP_EOL;
echo "------------------------CONSTANTES MAGICAS---------------------------------";
echo PHP_EOL;
echo __FILE__; #Retorna o script actual 
echo PHP_EOL;
echo __DIR__; # Retorna o Directorio completo do script
echo PHP_EOL;
echo __LINE__; # Retorna a linha onde esta a ser executado