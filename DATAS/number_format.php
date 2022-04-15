<?php

# A Função number_format() -> É usada para formatar valores monetarios e os apresentar
# de maneira mais bonita
/**
 * float $num,
 * int $decimals = 0,
 * ?string $decimal_separator = '.',
 * ?string $thousands_separator = ','
 */
$n1 = 9000;
echo number_format($n1)." AKZ";

# So assim deixzando os demais valores como padrão já é uma solução.