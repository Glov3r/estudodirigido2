<?php

print "Digite o 1º preço: ";
$PrimeiroPreco = fgets (STDIN);

print "Digite o 2º preço: ";
$SegundoPreco = fgets (STDIN);

print "Digite o 3º preço: ";
$TerceiroPreco = fgets (STDIN);

if ($PrimeiroPreco < $SegundoPreco and $PrimeiroPreco < $TerceiroPreco) {

    print "Você deveria comprar o 1º produto \n";

}

elseif ($SegundoPreco < $TerceiroPreco and $SegundoPreco < $PrimeiroPreco) {

    print "Você deveria comprar o 2º produto \n";

}

elseif ($TerceiroPreco < $SegundoPreco and $TerceiroPreco < $PrimeiroPreco) {

    print "Você deveria comprar o 3º produto \n";

}

elseif ($PrimeiroPreco == $SegundoPreco and $PrimeiroPreco < $TerceiroPreco ) {

    print "Você deveria comprar o 1º ou 2º produto \n";

}

elseif ($TerceiroPreco == $SegundoPreco and $TerceiroPreco < $PrimeiroPreco ) {

    print "Você deveria comprar o 2º ou 3º produto \n";

}

elseif ($PrimeiroPreco == $TerceiroPreco and $PrimeiroPreco < $SegundoPreco) {

    print "Você deveria comprar o 1º ou 3º produto

}

elseif ($PrimeiroPreco == $SegundoPreco and $PrimeiroPreco == $TerceiroPreco) {

    print "Os três produtos tem o mesmo preço, a escolha é dada pelo usuário \n";

}
