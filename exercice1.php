<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
 */
class Product
{
    public function __construct(private string $name, private float $price_without_tax, private float $vat_rate)
    {
    }

    public function getPriceWithVat(): float
    {
        return $this->price_without_tax + ($this->price_without_tax * $this->vat_rate) / 100;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of price_without_tax
     */
    public function getPriceWithoutTax(): float
    {
        return $this->price_without_tax;
    }

    /**
     * Get the value of vat_rate
     */
    public function getVatRate(): float
    {
        return $this->vat_rate;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of price_without_tax
     */
    public function setPriceWithoutTax(float $price_without_tax): self
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

    /**
     * Set the value of vat_rate
     */
    public function setVatRate(float $vat_rate): self
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }
}

$product = new Product("iPhone 13", 10, 5);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Le prix de <?= $product->getName() ?> est de <?= $product->getPriceWithVat() ?></p>
</body>

</html>