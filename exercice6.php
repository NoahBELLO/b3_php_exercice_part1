<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
class ShoppingCart
{
    private array $items = [];
    private float $total = 0;

    public function ajoutArticle(string $name, float $price): void
    {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    public function afficherArticles(): void
    {
        foreach ($this->items as $item) {
            echo "<li>Nom article : " . $item['name'] . " - Prix de l'article : " . $item['price'] . "</li>";
        }
    }

    public function calculTotal(): string
    {
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
        return "Total : " . $this->total;
    }
}

$cart = new ShoppingCart();

$cart->ajoutArticle('Pomme', 2.5);
$cart->ajoutArticle('Banane', 1.5);
$cart->ajoutArticle('Poire', 3.5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <?= $cart->afficherArticles() ?>
        </ul>
    </nav>
    <p><?= $cart->calculTotal() ?></p>
</body>

</html>