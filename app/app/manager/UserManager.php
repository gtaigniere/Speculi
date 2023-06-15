<?php


namespace App\Manager;


use PDO;

class UserManager extends Manager
{

    /**
     * UserManager constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        parent::__construct($pdo, 'user');
    }

}

