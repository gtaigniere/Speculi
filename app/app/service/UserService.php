<?php


namespace App\Service;


use App\Manager\UserManager;
use PDO;

class UserService extends Service
{
    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * UserService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\User');
        $this->userManager = new UserManager($db);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $results = $this->userManager->findAll();
        $objs = [];
        foreach($results as $result) {
            $objs[] = $this->convert($result);
        }
        return $objs;
    }
}