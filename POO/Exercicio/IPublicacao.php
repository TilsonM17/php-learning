<?php
   
   interface IPublicacao{

     public function Aberto();
     public function Fechar();
     public function Folhar(int $p);
     public function AvancarPag();
     public function VoltarPag();
    }