<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

$mot = 'kayak';
$mot_inverse = strrev($mot); 
    if ($mot === $mot_inverse) {
        echo "palindrome";
    } else {
        echo "non";
    }

