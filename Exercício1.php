<?php

print "Digite o 1° número: ";
$Primeiro = fgets(STDIN);

print "Digite o 2° número: ";
$Segundo = fgets(STDIN);

if ($Primeiro > $Segundo) {

    print "O 1° número é maior: $Primeiro \n";

}

elseif ($Primeiro == $Segundo) {

    print "Os dois números são iguais \n";

}
else {

    print "O 2° número é maior: $Segundo \n";

}
