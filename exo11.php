<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détermination du signe d'un nombre</title>
</head>
<body>
<?php
$nombre = rand(-100, 100);

echo "Nombre généré : $nombre<br>";

if ($nombre > 0) {
    echo "Le nombre est positif.<br>";
} elseif ($nombre < 0) {
    echo "Le nombre est négatif.<br>";
} else {
    echo "Le nombre est nul.<br>";
}
?>
</body>
</html>
