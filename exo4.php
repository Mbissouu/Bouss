<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résolution de l'équation ax + b = 0</title>
</head>
<body>
<?php
$a = rand(-10, 10); 
$b = rand(-10, 10);

echo "Équation générée : ${a}x + ${b} = 0<br>";

if ($a == 0) {
    if ($b == 0) {
        echo "L'équation a une infinité de solutions.<br>";
    } else {
        echo "L'équation n'a pas de solution.<br>";
    }
} else {
    $x = -$b / $a;
    echo "La solution de l'équation est x = $x<br>";
}
?>
</body>
</html>
