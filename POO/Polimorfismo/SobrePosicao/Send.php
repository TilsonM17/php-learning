<?php

declare(strict_types = 1);

 class Send{

    public function Enviar(string $email,?string $purl){
        echo "Estou a enviar um email para {$email} com o codigo {$purl}";;
        
    }   
 }


 class Email extends Send{
    /*
    public function Enviar(string $email, ?string $purl = null)
    {
        echo "Não quero enviar email";
    }
  */
 }


(new Email)->Enviar('tilsonmat@gmail.com','fkfkfkdfkdf');
