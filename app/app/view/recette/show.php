<?php
// Permet d'indiquer à PhpStorm que $recette est une instance de la classe Recette, ce qui permet d'activer l'auto completion
if (isset($recette) && $recette instanceof \App\Entity\Recette) :
?>

<section>
    <h1>Recette <?= $recette->getLibelle() ?></h1>

    <div>
        <?php var_dump($recette); ?>
    </div>
</section>

<?php endif; ?>

