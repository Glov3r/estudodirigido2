<?php
print "Digite o 1º número: ";
$numero1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$numero2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$numero3= (float) fgets(STDIN);

print "Digite o 4º número: ";
$numero4= (float) fgets(STDIN);

print "Digite o 5º número: ";
$numero5= (float) fgets(STDIN);

//Para determinar o maior

if ($numero1>$numero2 && $numero1>$numero3 && $numero1>$numero4 && $numero1>$numero5) 
    {print "O 1º número é o maior\n";}
    
if ($numero2>$numero1 && $numero2>$numero3 && $numero2>$numero4 && $numero2>$numero5) 
    {print "O 2º número é o maior\n";}
    
if ($numero3>$numero1 && $numero3>$numero2 && $numero3>$numero4 && $numero3>$numero5) 
    {print "O 3º número é o maior\n";}
    
if ($numero4>$numero1 && $numero4>$numero2 && $numero4>$numero3 && $numero3>$numero5) 
    {print "O 4º número é o maior\n";}
    
if ($numero5>$numero1 && $numero5>$numero2 && $numero5>$numero3 && $numero5>$numero4) 
    {print "O 5º número é o maior\n";}
    
