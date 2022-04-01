<?php

//Vamos usar o Polimorfismo de SobrePosição
//O PHP não suporta SubreCArga de Metodos!

require 'Secretario.php';
require 'Professor.php';

$s = new Secretario();
$p = new Professor;

$s->SetNome('Edu Bernardo');
$s->SetNivel('Secretario Adjunto');
//*-------------------------------------------

$p->SetNome('Tilson Mateus');
$p->SetNivel('Professor de Deuses');


$p->FazerLogIn();
