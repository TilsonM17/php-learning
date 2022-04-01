<?php

require_once 'Lutador.php';

class Luta{
   private $desafiado, $desafiante;
   private $rounds;
   private $aprovado;
   

   public function SetDesafiado(Lutador $desafiado){
        $this->desafiado = $desafiado;
   }
   public function GetDesafiado(){
        return $this->desafiado;
   }

   public function SetDesafiante(Lutador $desafiante){
       $this->desafiante = $desafiante;
   }
   public function GetDEsafinate(){
       return $this->desafiante;
   }

   public function MarcarLuta(){
        
   }
   public function Lutar(){

   }
}