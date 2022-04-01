<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matr;
    private $curso;

    public function SetMatr($p){
        $this->matr = $p;
    }
    public function SetCurso($p){
        $this->curso = $p;
    }
    public function GetMatr(){
        return $this->matr;
    }
    public function GetCurso(){
        return $this->curso;
    }

    
}