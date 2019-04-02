<?php

print "Digite a 1ª nota: ";
$Nota = fgets(STDIN);

print "Digite a 2ª nota: ";
$Nota2 = fgets(STDIN);

    $Media = ($Nota + $Nota2)/2;

if ($Media == 10) {

    print "Aprovado com Distinção \n";

}

elseif ($Media >= 7) {

    print "Aprovado \n";

}

else {

    print "Reprovado \n";

}
