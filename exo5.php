<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résolution de l'équation ax² + bx + c = 0</title>
</head>
<body>
<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

echo "Équation générée : ${a}x² + ${b}x + ${c} = 0<br>";

if ($a == 0) {
    if ($b == 0) {
        echo ($c == 0) ? "L'équation a une infinité de solutions.<br>" : "L'équation n'a pas de solution.<br>";
    } else {
        $x = -$c / $b;
        echo "L'équation est en réalité du premier degré avec la solution x = $x<br>";
    }
} else {
    
    $delta = $b * $b - 4 * $a * $c;
    echo "Discriminant Δ = $delta<br>";
    
    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Deux solutions réelles : x1 = $x1 et x2 = $x2<br>";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Une solution réelle unique : x = $x<br>";
    } else {
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$delta) / (2 * $a);
        echo "Deux solutions complexes : x1 = $realPart + {$imaginaryPart}i et x2 = $realPart - {$imaginaryPart}i<br>";
    }
}
?>
</body>
</html>
