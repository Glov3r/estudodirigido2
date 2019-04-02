<?php

print "Insira o seu sexo [F/M]: ";
$Sexo = fgetc(STDIN);

if ($Sexo == "F" or $Sexo == "f") {

	print "Sexo feminino foi validado";

}
elseif ($Sexo == "M" or $Sexo == "m") {

	print "Sexo masculino foi validado";

}
else {

	print "Sexo é inválido";

}
