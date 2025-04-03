<?php

// Exercice 2 : Afficher les nombres pairs de 0 à 20.
// Pseudo-code :
// pour i de 0 à 20 faire
//   si i % 2 == 0 alors
//     afficher i
// fin

$min = 0;
$max = 20;

$chiffresPairs = '';

for ($i = $min; $i <= $max; $i++) {
    if ( $i % 2 == 0 ) {
        $chiffresPairs .= $i.' ';
    }
}

echo 'Les chiffres pairs compris entre 0 et 20 sont: '.$chiffresPairs;
?>