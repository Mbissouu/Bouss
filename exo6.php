<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mois correspondant</title>
</head>
<body>
<?php
$mois = rand(1, 12);

echo "Mois généré : $mois<br>";

if ($mois == 1) {
    $nomMois = "Janvier";
} elseif ($mois == 2) {
    $nomMois = "Février";
} elseif ($mois == 3) {
    $nomMois = "Mars";
} elseif ($mois == 4) {
    $nomMois = "Avril";
} elseif ($mois == 5) {
    $nomMois = "Mai";
} elseif ($mois == 6) {
    $nomMois = "Juin";
} elseif ($mois == 7) {
    $nomMois = "Juillet";
} elseif ($mois == 8) {
    $nomMois = "Août";
} elseif ($mois == 9) {
    $nomMois = "Septembre";
} elseif ($mois == 10) {
    $nomMois = "Octobre";
} elseif ($mois == 11) {
    $nomMois = "Novembre";
} else {
    $nomMois = "Décembre";
}

echo "Correspondance avec if..else : $nomMois<br>";

switch ($mois) {
    case 1: $nomMois = "Janvier"; break;
    case 2: $nomMois = "Février"; break;
    case 3: $nomMois = "Mars"; break;
    case 4: $nomMois = "Avril"; break;
    case 5: $nomMois = "Mai"; break;
    case 6: $nomMois = "Juin"; break;
    case 7: $nomMois = "Juillet"; break;
    case 8: $nomMois = "Août"; break;
    case 9: $nomMois = "Septembre"; break;
    case 10: $nomMois = "Octobre"; break;
    case 11: $nomMois = "Novembre"; break;
    case 12: $nomMois = "Décembre"; break;
}

echo "Correspondance avec switch : $nomMois<br>";
?>
</body>
</html>
