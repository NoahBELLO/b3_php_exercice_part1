<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
class Math
{
    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }
}

$a = 5;
$b = 2;
$addition = Math::add($a, $b);
$soustraction = Math::subtract($a, $b);
$multiplication = Math::multiply($a, $b);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Addition de <?= $a ?> et <?= $b ?> = <?= $addition ?></p>
    <p>Soustraction de <?= $a ?> et <?= $b ?> = <?= $soustraction ?></p>
    <p>Multiplication de <?= $a ?> et <?= $b ?> = <?= $multiplication ?></p>
</body>

</html>