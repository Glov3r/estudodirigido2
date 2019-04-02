<?php

print "Digite um valor numérico: ";
$Numero = fgets(STDIN);

if ($Numero > 0) {

    print "O Valor é positivo. \n";

}

elseif ($Numero < 0) {

    print "O Valor é negativo. \n";

}
else {

    print "O Valor é 0. \n";

}
