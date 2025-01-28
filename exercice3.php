<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
require_once "exercice2.php";

class Employee extends Person
{
    public function __construct(private float $salary, private string $position, string $first_name, string $last_name, int $age)
    {
        parent::__construct($first_name, $last_name, $age);
    }

    public function afficheInfos(): string
    {
        return parent::afficheInfos() . " Je travaille en tant que " . $this->getPosition() . " et je gagne " . $this->getSalary() . "€.";
    }

    /**
     * Get the value of salary
     */
    public function getSalary(): string
    {
        return $this->salary;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Set the value of company
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
}

$employee = new Employee(2000, "Développeur", "Noah", "Bello", 22);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $employee->afficheInfos() ?></p>
</body>

</html>