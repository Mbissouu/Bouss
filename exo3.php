<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers = [rand(1, 100), rand(1, 100), rand(1, 100)];

echo "Nombres générés : $numbers[0], $numbers[1], $numbers[2]<br>";

sort($numbers);
echo "Ordre croissant : $numbers[0], $numbers[1], $numbers[2]<br>";

rsort($numbers);
echo "Ordre décroissant : $numbers[0], $numbers[1], $numbers[2]<br>";
?>
</body>
</html>
