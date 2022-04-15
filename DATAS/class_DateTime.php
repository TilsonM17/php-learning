<?php

# A classe DateTime é uma das maneiras de trabalhar com datas e horas no PHP
# Temos a função date(), mas o objecto DateTime tem um conglumerado de funções

$data = new DateTime();
echo $data->format("d-m-Y H:i:s");

echo PHP_EOL;

/*
echo date("d-m-Y H:i:s");
*/

print_r($data);