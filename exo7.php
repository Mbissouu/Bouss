<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année bissextile</title>
</head>
<body>
<?php
$annee = rand(1900, 2100);

echo "Année générée : $annee<br>";

if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
    echo "L'année $annee est bissextile.<br>";
} else {
    echo "L'année $annee n'est pas bissextile.<br>";
}
?>
</body>
</html>
