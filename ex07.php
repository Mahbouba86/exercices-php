<?php

// Exercice 7 : Calculer la factorielle d'un nombre.
// Pseudo-code :
// fact = 1
// pour i de 1 à n faire
//   fact *= i
// afficher fact

function factorial($n) { $res = 1; for ($i = 2; $i <= $n; $i++) 
    { $res *= $i; } 
    return $res; } 
    $num = 5; 
    echo "La factorielle de $num est : " . factorial($num);
    ?>