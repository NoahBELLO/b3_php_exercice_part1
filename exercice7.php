<?php

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amount): string
    {
        $this->balance += $amount;
        return "Dépôt de $amount € effectué. Nouveau solde : $this->balance €<br>";
    }

    public function withdraw(float $amount): string
    {
        $message = "";
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            $message = "Retrait de $amount € effectué. Nouveau solde : $this->balance €";
        } else {
            $message = "Solde insuffisant pour effectuer le retrait de $amount €";
        }

        return $message;
    }
}

$account = new BankAccount();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $account->deposit(100) ?></p>
    <p><?= $account->withdraw(50) ?></p>
    <p><?= $account->withdraw(100) ?></p>
</body>

</html>