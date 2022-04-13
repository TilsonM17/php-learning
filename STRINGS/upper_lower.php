<?php

# Usamos o lower para tornar minuscula
# Usamos o upper para tornar maiscula


$str_l = "Ola mundo dó php";
$str_u = "OLA MUNDO DO PHP";

#Por causa de uma Deficiencia do php, ele não lida bem com caracteres 
# Multi byte que levam acentos
echo mb_strtoupper($str_l);
