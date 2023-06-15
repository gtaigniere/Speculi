<?php


namespace App\Manager;

use PDO;

class QuantiteManager extends Manager
{
    /**
     * QuantiteManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'quantite');
    }

}