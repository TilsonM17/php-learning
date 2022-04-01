<?php
include 'Aluno.php';
 class Bolsista extends Aluno{

    private $bolsa;

    public function GetBolsa(){
        return $this->bolsa;
    }

    public function SetBolsa($b){
        $this->bolsa = $b;
    }
    public function RenovarBolsa(){
        echo "Bolsa foi renovada com sucesso!";
    }
    public function PagarPropina()
    {
        echo "O Aluno {$this->GetNome()} é bolsista paga comn desconto";
    }
 }