<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
class Article
{
    public function __construct(private string $title, private string $content)
    {
    }

    public function getSummary(int $maxLength): string
    {
        $message = substr($this->content, 0, $maxLength);
        if (strlen($this->content) > $maxLength) {
            $message .= "...";
        }
        return $message;
    }
}

$article = new Article("Pomme", "Abricot");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $article->getSummary(3) ?></p>
</body>

</html>