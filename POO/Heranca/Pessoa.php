<?php

class Pessoa{
    private $nome;
    private $sexo;
    private $idade;

    public function GetNome(){
        return $this->nome;
    }
    public function GetSexo(){
        return $this->sexo;
    }
    public function GetIdade(){
        return $this->idade;
    }
    public function SetNome(string $p){
        $this->nome = $p;
    }
    public function SetSexo(string $p){
        $this->sexo = $p;
    }
    public function SetIdade(int $p){
        $this->idade = $p;
    }

}