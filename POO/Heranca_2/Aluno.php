<?php

require_once 'Pessoa.php';

 class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function GetMatricula(){
        return $this->matricula;
    }
    public function SetMatricula($v){
        $this->matricula = $v;
    }
    public function GetCurso(){
        return $this->curso;
    }
    public function SetCurso($v){
        $this->curso = $v;
    }

    public function PagarPropina(){
        echo "<p>A sua Propina foi paga.</p>"; 
    }
 }