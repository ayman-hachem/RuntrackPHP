<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher les arguments GET</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Arguments GET et leurs valeurs</h2>

<?php
// Définition des arguments GET
$_GET = array(
    "nom" => "John",
    "age" => 30,
    "ville" => "Paris",
    "profession" => "Ingénieur",
    "langage" => "PHP"
);

// Vérifie s'il y a des arguments GET
if (!empty($_GET)) {
    // Commence la création du tableau HTML
    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';
    
    // Boucle à travers les arguments GET
    foreach ($_GET as $key => $value) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($key) . '</td>'; // Affiche la clé de l'argument
        echo '<td>' . htmlspecialchars($value) . '</td>'; // Affiche la valeur de l'argument
        echo '</tr>';
    }
    
    // Termine le tableau HTML
    echo '</table>';
} else {
    // Affiche un message si aucun argument GET n'est présent
    echo '<p>Aucun argument GET n\'a été passé.</p>';
}
?>

</body>
</html>
