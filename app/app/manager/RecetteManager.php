<?php


namespace App\Manager;

use PDO;

class RecetteManager extends Manager
{

    /**
     * RecetteManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'recette');
    }

}