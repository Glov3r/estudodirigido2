<?php

print "Digite o 1º número (não repita números): ";
$PrimeiroNumero = fgets(STDIN);

print "Digite o 2º número (não repita números): ";
$SegundoNumero = fgets(STDIN);

print "Digite o 3º número (não repita números): ";
$TerceiroNumero = fgets(STDIN);

//Primeiro número maior

if ($PrimeiroNumero > $SegundoNumero and $SegundoNumero > $TerceiroNumero) {

    print "$PrimeiroNumero \n" . "$SegundoNumero \n" . "$TerceiroNumero \n";

}

elseif ($PrimeiroNumero > $TerceiroNumero and $TerceiroNumero > $SegundoNumero) {

    print "$PrimeiroNumero \n" . "$TerceiroNumero \n" . "$SegundoNumero \n";

}

//Segundo número maior

elseif ($SegundoNumero > $PrimeiroNumero and $PrimeiroNumero > $TerceiroNumero) {

    print "$SegundoNumero \n" . "$PrimeiroNumero \n" . "$TerceiroNumero \n";

}

elseif ($SegundoNumero > $TerceiroNumero and $TerceiroNumero > $PrimeiroNumero) {

    print "$SegundoNumero \n" . "$TerceiroNumero \n" . "$PrimeiroNumero \n";

}

//Terceiro número maio1ºf ($TerceiroNumero > $PrimeiroNumero and $PrimeiroNumero > $SegundoNumero) {

    print "$TerceiroNumero \n" . "$PrimeiroNumero \n" . "$SegundoNumero2º}

elseif ($TerceiroNumero > $SegundoNumero and $SegundoNumero > $PrimeiroNumero) {

    print "$TerceiroNu3º . "$SegundoNumero \n" . "$PrimeiroNumero \n";

}
