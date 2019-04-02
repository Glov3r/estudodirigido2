<?php
print "Digite a base: ";
$base= (float) fgets(STDIN);

print "Digite o expoente: ";
$Expoente= (float) fgets(STDIN);

$Potencia= ($Base**$Expoente);

print "\nO resultado é: $Potencia";
