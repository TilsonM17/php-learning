<?php

# strstr() -> É uma função que retorna uma parcela de uma string
# apartir de uma string

$str = "Esta frase é para saberem que eu sou o Tilson Mateus o mais mal do Mundo";
# Vai retornar a string desde a ocorrencia para a direita
echo strstr($str,'é');

echo PHP_EOL;

#Vai retornar da ocorrencia para a esquerda
echo strstr($str,'é',true);