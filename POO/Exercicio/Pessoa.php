<?php

class Pessoa{
    private $nome,$idade,$sexo;

    public function __construct($n,$i,$s)
    {
        $this->SetNome($n);
        $this->SetIdade($i);
        $this->SetSexo($s);
    }
    public function GetNome(){
        return $this->nome;
    }

    public function GetIdade(){
        return $this->idade;
    }

    public function GetSexo(){
        return $this->sexo;
    }

    public function SetIdade($v){
        $this->idade = $v;
    }

    public function SetSexo($s){
        $this->sexo = $s;
    }

    public function SetNome($n){
        $this->nome = $n;
    }

}