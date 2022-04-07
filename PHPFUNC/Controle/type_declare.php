<?php
declare(strict_types = 1);
#O php permite tipicicar parametros em metodos,funções
# OS tipos são : string,int,bool,float,mixed,callable,array


function Falar(array $lista_frase):string{

    foreach($lista_frase as $item){
        echo $item,PHP_EOL;
    }

    return 'Terminado!';



}

echo Falar(lista_frase:['Ola','Bom dia','Como Voce esta','Desejo um bom dia']);