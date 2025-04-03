<?php

// Exercice 10 : Trouver la somme des chiffres d’un nombre.
// Pseudo-code :
// somme = 0
// tant que n > 0 faire
//   somme += n % 10
//   n = n // 10
// afficher somme
// $a = array(2, 4, 6, 8);
// echo "sum(a) = " . array_sum($a) . "\n";


$nombre = 12345;
$somme = 0;

while ($nombre > 0) {
    $somme += $nombre % 10; 
}

echo "La somme des chiffres est : " . $somme;
?>

