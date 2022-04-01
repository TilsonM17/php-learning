<?php

abstract class Usuario{
    protected $nome;
    protected $sexo;
    protected $nivel;


    public function SetNome($v){
        $this->nome = $v;
    }
    public function GetNome(){
        return $this->nome;
    }
    public function SetSexo($v){
        $this->sexo = $v;
    }
    public function GetSexo(){
        return $this->sexo;
    }
    public function SetNivel($i){
        $this->nivel = $i;
    }
    public function GetNivel(){
        return $this->nivel;
    }

    abstract public function FazerLogIn();
    abstract public function FazerLogOut();
}