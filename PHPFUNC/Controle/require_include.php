<?php
# O require e o Include tem o mesmo objectivo e caracteristicas semelhantes
# Sendo a diferença que o :

# Require inclui um ficheiro e se ele não existir, para a aplicação e dar
# Fatal ERROR

# Include Inclui um ficheiro e se ele não existir, continue com a aplicação e da um
# Warning

/*
include 'erro.php';
echo "Ola mundo 1";
*/

/*
require 'erro.php' ;
echo "Ola mundo 2";
*/


# É melhor usar o require porque se o ficheiro não exitir o codigo vai para
# ;)