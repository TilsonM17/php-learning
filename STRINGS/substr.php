<?php
# substr() -> esta função tem o objectivo de retornar uma parte de uma string.
# O que for definido em inicio e Fim sera a parte retornada.

# Nota INDEX-> Ele começa da esquerda, se for dado um valor negativo vai começar da direita
# Nota LENGTH-> 
# Exemplo:
$str = "OLa a todos meu nome é Uzias tenho 20 anos3244;++++";

# substr(string,$offset) -> Retorna o resto da string

echo mb_substr($str, -5,-2);