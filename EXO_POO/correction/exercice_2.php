<?php

class Compte
{
    
    /**
     * @var int $somme
     */
    public int $somme;

    /**
     * @var int $taux
     */
    public float $taux;

    /**
     * @param int $somme
     * @param float $taux
     * 
     */
    public function __construct(int $somme, float $taux)
    {
        $this->somme = $somme;
        $this->taux = $taux;
    }

    /**
     * @return string
     */
    public function affiche(): string
    {
        return " Somme : " . $this->somme . "€   Taux : " . $this->taux . "%";
    }

    /**
     * @var int $depot
     * @return void
     */
    public function depot(int $depot): void
    {
        $this->somme += $depot;
    }

    /**
     * @var int $retrait
     * @return void
     */
    public function retrait(int $retrait): void
    {
        if ($retrait > $this->somme) {
            echo "Erreur : demande de retrait trop important.";
            return;
        }
        $this->somme -= $retrait;
    }

    /**
     * @return void
     */
    public function interets(): void
    {
        $this->somme +=  ($this->taux * $this->somme) / 100;
    }
}

$compte = new Compte(2000, 2.0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello</h1>
    <p><?php echo $compte->affiche(); ?></p>
    <p>Dépot de 200 €</p>
    <?php $compte->depot(200); ?>
    <p><?php echo $compte->affiche(); ?></p>
    <p>Retrait de 500 €</p>
    <?php $compte->retrait(500); ?>
    <p><?php echo $compte->affiche(); ?></p>
    <p>Retrait de 5000 €</p>
    <?php $compte->retrait(5000); ?>
    <p><?php echo $compte->affiche(); ?></p>
    <?php $compte->interets(); ?>
    <p><?php echo $compte->affiche(); ?></p>
</body>

</html>