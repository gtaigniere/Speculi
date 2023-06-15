<?php


namespace App\Manager;

use PDO;

class EtapeManager extends Manager
{

    /**
     * EtapeManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'etape');
    }

}