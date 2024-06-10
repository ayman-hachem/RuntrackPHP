<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appels de la fonction
bonjour(true); // Affichera "Bonjour"
echo "<br>"; // Pour ajouter un saut de ligne entre les deux résultats
bonjour(false); // Affichera "Bonsoir"
?>
