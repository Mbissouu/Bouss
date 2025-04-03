<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de dates</title>
</head>
<body>
<?php
$jour = rand(1, 28); 
$mois = rand(1, 12);
$annee = rand(1900, 2100);

$nb_jours = rand(1, 365);

$date = sprintf('%04d-%02d-%02d', $annee, $mois, $jour);
echo "Date générée : $jour/$mois/$annee<br>";
echo "Nombre de jours généré : $nb_jours<br>";

$date_future = date('d/m/Y', strtotime($date . " +$nb_jours days"));
echo "Date après $nb_jours jours : $date_future<br>";

$date_passee = date('d/m/Y', strtotime($date . " -$nb_jours days"));
echo "Date avant $nb_jours jours : $date_passee<br>";
?>
</body>
</html>
