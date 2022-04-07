<?php
  
  require 'IPublicacao.php';

  class Livro implements IPublicacao{
    private string $titulo,$autor;
    private int $total_page,$pag_atual;
    private bool $aberto;
    private Pessoa $leitor;

    public function __construct(string $titulo,string $autor,int $total_page,int $pag_actual,bool $aberto,Pessoa $leitor)
    {
        $this->SetTitulo($titulo);
        $this->SetAutor($autor);
        $this->SetTotalPage($total_page);
        $this->SetPageAct($pag_actual);
        $this->SetAberto($aberto);
        $this->SetLeitor($leitor);
    }
    public function SetLeitor(Pessoa $p){
        $this->leitor = $p;
    }
    public function GetLeitor():Pessoa{
        return $this->leitor;
    }

    public function SetTitulo($p){
        $this->titulo = $p;
    }

    public function GetTitulo(){
        return $this->titulo;
    }
    public function SetAutor($p){
        $this->autor = $p;
    }

    public function GetAutor(){
        return $this->autor;
    }
    public function SetTotalPage($p){
        $this->total_page = $p;
    }

    public function GetTotalPage(){
        return $this->total_page;
    }

    public function SetPageAct($p){
        $this->pag_atual = $p;
    }

    public function GetPageAct(){
        return $this->pag_atual;
    }

    public function SetAberto(bool $p){
        $this->aberto = $p;
    }

    public function GetAberto(){
        return $this->aberto;
    }

    public function Detalhes():void{
        echo" ------------------------------------";
        echo"              DADOS PESSOAIS:          ","<br>";
        echo"Nome: {$this->GetLeitor()->GetNome()} ","<br>";
        echo"Idade: {$this->GetLeitor()->GetIdade()} ","<br>";
        echo"Sexo: {$this->GetLeitor()->GetSexo()} ","<br>";
        echo"                                      ","<br>";
        echo"------------------------------------","<br>";
        echo "<hr>";
        echo" ------------------------------------";
        echo"              Dados dos Livros:         ","<br>";
        echo"Titulo do Livro: {$this->GetTitulo()} ","<br>";
        echo"Autor : {$this->GetAutor()} ","<br>";
        echo"Total Pagina : {$this->GetTotalPage()} ","<br>";
        echo"Pagina Actual : {$this->GetPageAct()} ","<br>";
        echo"Aberto: {$this->GetAberto()} ","<br>";
    
        echo"                                     ","<br>";
        echo"------------------------------------","<br>";
    }

    public function Aberto(){
        if($this->GetAberto() != true){
            $this->SetAberto(true);
            echo "O Livro foi Aberto";
        }else
            echo "Não Posso Abrir Algo que ja esta aberto,Burro!";
    }
    public function Fechar(){
        if($this->GetAberto() == true)
           $this->SetAberto(false);
        else
           echo "Não Posso Fechar Algo que ja esta Fechado,Burro!";
    }
    public function Folhar(int $n_Pagina){
        if($n_Pagina > $this->GetTotalPage()){
            echo "Não podes exceder o limte da pagina";
            return;
        }

         $this->SetPageAct($n_Pagina) ;
         echo "Agora estou na Pagina {$this->GetPageAct()}","<br>";
    }

    public function AvancarPag(){
         $this->SetPageAct($this->GetPageAct() + 1);
        
         echo "Agora estou na pagina {$this->GetPageAct()}","<br>";
    }
    public function VoltarPag(){
        $this->SetPageAct($this->GetPageAct() - 1);
        echo "Agora estou na pagina {$this->GetPageAct()}","<br>";
    }


  }