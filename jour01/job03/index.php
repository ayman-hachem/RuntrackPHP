<?php 
$tableau = [
    'nom' => "jean",
    'type' => "hybride",
    'valeur' => 0
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau HTML avec PHP</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $tableau['type']; ?></td>
                <td><?php echo $tableau['nom']; ?></td>
                <td><?php echo $tableau['valeur']; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
