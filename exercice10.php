<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */
class Statistics
{
    /**
     * Calcule la somme d'un tableau de nombres
     */
    public static function getSum(array $numbers): float
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    /**
     * Calcule la moyenne d'un tableau de nombres
     */
    public static function getAverage(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }
        return Statistics::getSum($numbers) / count($numbers);
    }

    /**
     * Trouve la valeur minimale d'un tableau de nombres
     */
    public static function getMin(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }
        $min = $numbers[0];
        foreach ($numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    /**
     * Trouve la valeur maximale d'un tableau de nombres
     */
    public static function getMax(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }
        $max = $numbers[0];
        foreach ($numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }
}

$numbers = [10, 5, 8, 20, 3, 15];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Tableau de nombres : <?= implode(", ", $numbers) ?></p>
    <p>Somme : <?= Statistics::getSum($numbers) ?></p>
    <p>Moyenne : <?= Statistics::getAverage($numbers) ?></p>
    <p>Valeur minimale : <?= Statistics::getMin($numbers) ?></p>
    <p>Valeur maximale : <?= Statistics::getMax($numbers) ?></p>
</body>

</html>