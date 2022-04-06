<?php

require_once 'Usuario.php';

class Professor extends Usuario{

    public function FazerLogIn()
    {
        echo "O teu Nivel é {$this->GetNivel()}","<br>";
        echo "<strong> Ola {$this->GetNome()} estas na are de Professor! </stong>";
    }
    public function FazerLogOut()
    {
        echo "<strong> {$this->GetNome()} Acabas de sair da area Professor! </stong>";
    }
  
}