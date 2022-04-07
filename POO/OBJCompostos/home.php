<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derotas;
    private $empates;

    public function __construct($n,$na,$i,$al,$p,$v,$d,$e)
    {
        $this->nome = $n;
        $this->nacionalidade = $na;
        $this->idade = $i;
        $this->altura = $al;
        $this->peso = $p;
        $this->vitorias = $v;
        $this->derotas = $d;
        $this->empates = $e;

        $this->SetCategoria();
    }

    /**
     * @method Categoria seter
     */
    public function SetCategoria(){
        //str_contains()
         switch($this->peso){
               case $this->peso <= 40:
                    $this->categoria = "Junior";
                break;

               case $this->peso > 40 and $this->peso <= 80 : 
                    $this->categoria = "PLeno";
                break;
               case $this->peso > 80 :
                    $this->categoria = "Senior";
                break;

                default:
                    $this->peso = -1;
                break;
         }
    }
    /**
     * @method Categoria geter   
     */
    public function GetCategoria(){
          return $this->categoria;
    }

    public function Apresentar(){
        echo "OLa a todos meu nome é {$this->nome} e a minha nacionalidade é {$this->nacionalidade} e tenho {$this->idade} de idade e tenho {$this->altura} de Altura";
    }
    public function Status(){
        echo $this->GetCategoria();
    }
    public function GanharLuta(){
       $this->vitorias = $this->vitorias + 1;
       echo "Agora stenho {$this->vitorias} Vitorias";
    }
    public function PerderLuta(){
        $this->derotas = $this->derotas + 1;
        echo "Agora tenho {$this->derrotas} derrotas";      
    }
    public function EmpatarLuta(){
        $this->empates = $this->empates++;
        echo "Agora tenho {$this->empates} empates";
    }
}   
