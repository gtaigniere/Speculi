<?php

namespace App\Manager;

use PDO;

class IngredientManager extends Manager
{

    /**
     * IngredientManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'ingredient');
    }

}