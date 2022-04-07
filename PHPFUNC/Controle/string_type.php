<?php
declare(strict_types = 1);

# o PHP faz conversão implicita das variaveis
# Por isso da essa merda
# Converte Int ou float para String
# Por isso para resolver isso a usamos o comando
# declare(strict_types = 1) -> ESte comando permite declara que o php deve seguir
# Estritamente a definiçao de Typos.
# O 1 define como true
function Falar(string $sms){
    echo $sms;
}

//Falar(3267653); // Com a declaração de tipos estritos,vai dar erro
echo PHP_EOL;
// Falar(343434.234324);// Isso tambem

 Falar('OLa mundo');

 #---------------------------------------------------------------------

 
