<?php


namespace App\Manager;

use PDO;

class MesureManager extends Manager
{

    /**
     * MesureManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'mesure');
    }

}