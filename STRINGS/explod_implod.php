<?php
# explode() -> Transforma uma stringn em array

$str = "OLa a todos como voces estão, DEus esta a vos cuidar";

$new_arr =   explode(",",$str,2);
var_dump(
  $new_arr
);

#Implode() -> Serve para tranformar um array em string
 print_r(implode(",",$new_arr));
