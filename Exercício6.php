<?php

print "Digite o 1º número: ";
$PrimeiroNumero = fgets(STDIN);

print "Digite o 2º número: ";
$SegundoNumero = fgets(STDIN);

print "Digite o 3º número: ";
$TerceiroNumero = fgets(STDIN);

if ($PrimeiroNumero > $SegundoNumero and $PrimeiroNumero > $TrimeiroNumero) {

    print "O 1º número é o maior";

}
elseif ($SegundoNumero > $PrimeiroNumero and $SegundoNumero > $TerceiroNumero) {

    print "O 2º númeor é o maior";

}
elseif ($TerceiroNumero > $PrimeiroNumero and $TerceiroNumero > $SegundoNumero) {

    print "O 3º número é o maior";

}
elseif ($PrimeiroNumero == $SegundoNumero and $PrimeiroNumero == $TerceiroNumero) {

    print "Todos os números são iguais \n";

}
