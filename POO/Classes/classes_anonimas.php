<?php
# Claasse anonima é usada uma unica vez para criar objectos
# É anonima porque não tem nome

$a = new class{

    public function Falar(){
        echo "OLa estou a falar com voce";
    }
};


$a->Falar();