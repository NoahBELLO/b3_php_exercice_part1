<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
class Movie
{
    public function __construct(private string $title, private string $genre, private int $ageRestriction)
    {
    }

    public function canWatch(int $viewerAge): bool
    {
        return $viewerAge <= $this->ageRestriction;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of ageRestriction
     */
    public function getAgeRestriction(): int
    {
        return $this->ageRestriction;
    }

    /**
     * Set the value of ageRestriction
     */
    public function setAgeRestriction(int $ageRestriction): self
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }
}

$movie = new Movie("The Matrix", "Action", 16);
$age = 5;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($movie->canWatch($age)): ?>
        <p>Vous ne pouvez pas regarder le film <?= $movie->getTitle() ?> car vous avez moins de
            <?= $movie->getAgeRestriction() ?>
        </p>
    <?php else: ?>
        <p>Vous pouvez regarder le film <?= $movie->getTitle() ?> car vous avez plus de <?= $movie->getAgeRestriction() ?>
        </p>
    <?php endif; ?>
</body>

</html>