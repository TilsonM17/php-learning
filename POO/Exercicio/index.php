<?php
# Usando o Encapsulamnento, com Interfaces
# E usamos Relacionamento por Agregação

require 'Pessoa.php';
require 'Livro.php';

$p[0] = new Pessoa("Tilson Mateus",45,"M");
$p[1] = new Pessoa("Edmundo Freud",92,"M");
$p[2] = new Pessoa("Margarida João",20,"F");


//-------------------------------------------------------------------------
$l2 = new Livro("A Maravilha da Programação","Lucas Andromeda",453,0,true,$p[0]);
$l1 = new Livro("Perspicaz das Escrituras","Associção das Testemunhas de Jeová",125,4,true,$p[2]);
$l2->Detalhes();
$l2->Folhar(126);
$l2->VoltarPag();

?>