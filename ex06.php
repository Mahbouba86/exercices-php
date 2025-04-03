<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c

$number1 = 10; 
$number2 = 15;
$number3 = 20; 

if ($number1 > $number2 && $number1 > $number3) 
{ echo "Le plus grand nombre est : $number1\n"; } 
elseif ($number2 > $number1 && $number2 > $number3)
{ echo "Le plus grand nombre est : $number2\n"; } 
else {
    echo "Le plus grand nombre est : $number3\n";
}
?>