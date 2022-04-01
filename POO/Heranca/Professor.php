<?php

require_once 'Pessoa.php';

 class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function SetEspecialidade($p){
        $this->especialidade = $p;
    }
    public function SetSalario($p){
        $this->salario = $p;
    }
    public function GetEspecialidade(){
        return $this->especialidade;
    }
    public function GetSalario(){
        return $this->salario;
    }
 }
 