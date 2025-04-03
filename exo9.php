<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date précédente et suivante</title>
</head>
<body>
<?php
$jour = rand(1, 28); 
$mois = rand(1, 12);
$annee = rand(1900, 2100);

$date = sprintf('%04d-%02d-%02d', $annee, $mois, $jour);
echo "Date générée : $jour/$mois/$annee<br>";

$date_suivante = date('d/m/Y', strtotime($date . ' +1 day'));
echo "Date suivante : $date_suivante<br>";

$date_precedente = date('d/m/Y', strtotime($date . ' -1 day'));
echo "Date précédente : $date_precedente<br>";
?>
</body>
</html>
