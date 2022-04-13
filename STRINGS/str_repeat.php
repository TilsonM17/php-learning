<?php

# str_repeat() - Uma função para repetir ou concatenar um caracter em um 
# determinado numero de vezes
# 
$str = "Ola a todos como voçes estão";

# echo str_repeat('.',10)." ".$str;

# Existe uma outra função que acho que vou usar mais
# str_pad()
# O valor do 2 parametro vai pegar o comprimento da String
# e add nela o valor. 
echo str_pad(100,10,"....",STR_PAD_RIGHT);

