<?php
 
 require 'Usuario.php';

 class Secretario extends Usuario{

    public function FazerLogIn()
    {
        echo "O teu Nivel é {$this->GetNivel()}","<br>";
        echo "<strong> Ola {$this->GetNome()} estas na are de Secretario! </stong>";
    }

    /*public function FazerLogIn($nome,$senha){
        echo "Não VAi funcionar;
    }*/


    public function FazerLogOut()
    {
        echo "<strong> {$this->GetNome()} Acabas de sair da area Secretario! </stong>";
    }
 }