<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
require_once "exercice2.php";
class Student extends Person
{
    public function __construct(private array $grades, string $first_name, string $last_name, int $age)
    {
        parent::__construct($first_name, $last_name, $age);
    }

    public function getAverage(): float
    {
        $total = 0;
        foreach ($this->grades as $grade) {
            $total += $grade;
        }
        return $total / count($this->grades);
    }

    /**
     * Get the value of grades
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * Set the value of grades
     */
    public function setGrades(array $grades): self
    {
        $this->grades = $grades;

        return $this;
    }
}

$student = new Student([15, 10, 19, 5], "Noah", "Bello", 22);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $student->afficheInfos() ?> a une moyenne de <?= $student->getAverage() ?></p>
</body>

</html>