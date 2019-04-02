<?php

print "Digite o primeiro número: ";
$Primeiro_Numero = fgets(STDIN);

print "Digite o segundo número: ";
$Segundo_Numero = fgets(STDIN);

print "Digite o terceiro número: ";
$Terceiro_Numero = fgets(STDIN);

//Número maior

if ($Primeiro_Numero > $Segundo_Numero and $Primeiro_Numero > $Terceiro_Numero) {

    print "O primeiro número é o maior \n";

}

elseif ($Segundo_Numero > $Primeiro_Numero and $Segundo_Numero > $Terceiro_Numero) {

    print "O segundo númeor é o maior \n";

}

elseif ($Terceiro_Numero > $Primeiro_Numero and $Terceiro_Numero > $Segundo_Numero) {

    print "O terceiro número é o maior \n";

}

elseif ($Primeiro_Numero == $Segundo_Numero and $Primeiro_Numero == $Terceiro_Numero) {

    print "Todos os números são iguais \n";

}

//Menor Número

if ($PrimeiroNumero < $SegundoNumero and $PrimeiroNumero < $TerceiroNumero) {

    print "O 1º número é o menor \n";

}

elseif ($SegundoNumero < $PrimeiroNumero and $SegundoNumero < $TerceiroNumero) {

    print "O 2º númeor é o menor \n";

}

elseif ($TerceiroNumero < $PrimeiroNumero and $TerceiroNumero < $SegundoNumero) {

    print "O 3º número é o menor \n";

}

//Em caso de dois números iguais

if ($PrimeiroNumero == $SegundoNumero and $PrimeiroNumero != $TerceiroNumero) {

    print "O 1º e o 2º números são iguais \n";

}

elseif ($PrimeiroNumero == $TerceiroNumero and $PrimeiroNumero != $SegundoNumero) {

    print "O 1º e o 3º números são iguais \n";

}

elseif ($SegundoNumero == $TerceiroNumero and $SegundoNumero != $PrimeiroNumero) {

    print "O 2º e o 3º números são iguais \n";
