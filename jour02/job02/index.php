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
// Les valeurs fournies
$arguments = array(
    "nom" => "John",
    "age" => "30",
    "ville" => "Paris"
);

// Affichage du tableau
echo '<table>';
echo '<tr><th>Argument</th><th>Valeur</th></tr>';
foreach ($arguments as $key => $value) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($key) . '</td>';
    echo '<td>' . htmlspecialchars($value) . '</td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>
