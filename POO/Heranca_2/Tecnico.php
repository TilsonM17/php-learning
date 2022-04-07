<?php

require 'Aluno.php';

class Tecnico extends Aluno{
    private $registroProfessional;

    public function SetRegistroProfessional($v){
        $this->registroProfessional = $v;
    }
    public function GetRegistroProfessional(){
        return $this->registroProfessional;
    }

    public function Praticar(){
        echo "Estou a praticar!";
    }
}