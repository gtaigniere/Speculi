<?php


namespace App\Manager;

use PDO;

class PaysManager extends Manager
{

    /**
     * PaysManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'pays');
    }

}