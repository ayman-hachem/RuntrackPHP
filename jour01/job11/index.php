<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 == 0) {
                return "Erreur : Division par zéro";
            }
            return $nombre1 / $nombre2;
        case '%':
            if ($nombre2 == 0) {
                return "Erreur : Division par zéro";
            }
            return $nombre1 % $nombre2;
        default:
            return "Erreur : Opération non valide";
    }
}

// Exemple d'utilisation
$resultat = calcule(10, '+', 5);
echo $resultat;  // Affiche : 15
?>
