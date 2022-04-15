<?php

# array_unique() -> Serve para eliminar valores repitidos em
# um array, ela é case sensitive

 $arr = [
     'Tilson',
     'Telma',
     'Wilson',
     'Tilson',
     'Alice',
     'Wilson',
     'tilson'
 ];

 print_r(array_unique($arr));