<?php

//Quantidade de pares e impares em 10 números

Nnumeropar=0;

$Numeroimpar=0;

$ContagemVezes=1;

do {print "Digite um número: ";

    $Numero = (float) fgets(STDIN);
    
    if ($Numero%2==0)
    {$NumeroPar++;}
    
    if ($Numero%2!=0)
    {$NumeroImpar++;} 
    
    $ContagemVezes++;}  while($ContagemVezes<=10);
    
print "Quantidade de número(s) impar(es): $NumeroImpar\nQuantidade de número(s) par(es): $NumeroPar";
