
<section>
    <h1>Administration</h1>

    <ul>
        <li class="<?= $vo->getIndexActif() ? 'active' : '' ?>"><a href="?target=admin">Dashboard</a></li>
        <li class="<?= $vo->getRecetteActif() ? 'active' : '' ?>"><a href="?target=admin&action=recette">Recettes</a></li>
        <li><a href="?target=admin&action=pays">Pays</a></li>
        <li><a href="?target=admin&action=ingredient">Ingredients</a></li>
        <li><a href="?target=admin&action=etape">Etapes</a></li>
        <li><a href="?target=admin&action=mesure">Mesures</a></li>
        <li><a href="?target=admin&action=quantite">Quantités</a></li>
        <li><a href="?target=admin&action=utilisateur">Utilisateurs</a></li>
    </ul>

    <pre>
    <?php
        var_dump($vo);
    ?>
    </pre>

    <div>
        <figure>
            <a href=""><img src="../../public/img/gateau.jpg" alt="Gâteau" title="Gâteau"></a>
            <a href=""><img src="../../public/img/ustensiles.jpg" alt="Ustensiles" title="Ustensiles"></a>
            <a href=""><img src="../../public/img/recette.jpg" alt="Recette" title="Recette"></a>
            <a href=""><img src="../../public/img/assiette.jpg" alt="Assiette" title="Assiette"></a>
            <a href=""><img src="../../public/img/madeleines.jpg" alt="Madeleines" title="Madeleines"></a>
            <a href=""><img src="../../public/img/pizza.jpg" alt="Pizza" title="Pizza"></a>
        </figure>
    </div>
</section>
