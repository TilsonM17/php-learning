
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objecto Composto</title>
</head>
<body>
    <?php
          require 'index.php';
            $l = [];

            $l[0] = new Lutador('Tilson','Angolana',50,1.80,81,4,0,2);
            $l[1] = new Lutador('Eduardo','Guinense',23,2.5,70,0,5,3);

          foreach($l as $i){
                $i->Apresentar();
                
                echo "<br>";
          }

            
    
    
    
    ?>
</body>
</html>