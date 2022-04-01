<?php

#Named Arguments permite definir directamente um parametro de uma função
#OU method muito util quando temos diversos parametros para setar.
class Pessoa{
    
    public function Falar($nome = "Tilson",$idade,$gps = "Camama"){
        echo "OLa meu nome é {$nome} e tenho {$idade} de idade e actualmente eu estou no {$gps}";
    }

    public function Correr($km,$durante){
        echo "Eu estou a correr a {$km} durante {$durante}";
    }
}


# (new Pessoa)->Falar(idade:34,nome:'Andre Baltier');

#Podemos tambem alterar a ordem dos parametros
(new Pessoa)->Correr(durante:'8horas',km:'40km');