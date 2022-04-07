<?php
# Traits -> Podem ser definidos como uma estrutura que alberga
# um conjunto de methodose propriedades que podem ser reutilizados.
# Usado para ser uma alternativa as heranças de classes
# Permite o polimorfismo de Sobreposição 

/**
 * Um trait para definir metodos para as views
 */
trait View{
    public $nome;
    
    public function Renderizar(){
        echo "Estou a renderizar uma view";
    }
    public function Reutilizar(){
        echo "Estou a Reutilizar uma parte da view";
    }
}


class Home{

    use View;

}


$p = new Home;
print_r($p);