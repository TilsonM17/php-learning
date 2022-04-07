<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    #Relacionamento por Agregação

      require './Luta.php';
      require_once './Lutador.php';
      
      # Criar Lutador
    $l[0] = new Lutador("Edu Bernardo",'Senegalense',67,123,1.5,0,10,3);
    $l[1] = new Lutador("Tilson Lucas",'Angolana',25,13,3.5,10,0,0);

       $t = new Luta();
       $t->SetDesafiado($l[0]);
       $t->SetDesafiante($l[1]);
       $t->GetDesafiado()->GanharLuta();
       

       echo "<hr>";
        
    ?>


</body>
</html>