<?php

print "Deseja Fibonacciar até quanto? ";

$Fibonacciar= (float) fgets(STDIN);

print "(O valor *provavelmente* vai ultrapassar o digitado)\n";

sleep (1);

$Fibonacci=0;

$FibonacciNovo=1;

print "$Fibonacci $FibonacciNovo ";

while ($FibonacciMaisNovoAinda<$Fibonacciar)

    {$FibonacciMaisNovoAinda=$Fibonacci+$FibonacciNovo;
    
     print "$FibonacciMaisNovoAinda ";
     
     $Fibonacci= $FibonacciNovo;
     $FibonacciNovo= $FibonacciMaisNovoAinda;}
