<?php
declare(strict_types = 1);
# Claasse anonima é usada uma unica vez para criar objectos
# É anonima porque não tem nome
$a = new class{

    public string $nome;

    public function AlgumaCoisa(){
        echo "Estou a fazer Algo com isso {$this->nome}";
    }
    
};


 $a->nome = '1223';
 $a->AlgumaCoisa();