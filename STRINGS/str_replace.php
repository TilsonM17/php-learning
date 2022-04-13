<?php
# str_replace - serve para trocar de lugar assim comno o minato.
# 1P -> É a string a ser trocada
# 2P -> O que sera trocado
# 3P -> Frase
/*
$arr = ['naruto'];

echo str_replace(':','naruto',"A minha personagem favorita é :");*/

$str = "Vou passar a comer : e tambem . com !";

echo str_replace([':','.','!'],['Batata Frita','Diamba', 'Maconha'],$str);