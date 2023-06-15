<?php


namespace App\Service;


use App\Entity\Pays;
use App\Manager\PaysManager;
use PDO;

class PaysService extends Service
{
    /**
     * @var PaysManager
     */
    private $paysManager;

    /**
     * PaysService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Pays');
        $this->paysManager = new PaysManager($db);
    }

    /**
     * @return Pays[]
     * @throws \Exception
     */
    public function findAll(): array
    {
        $results = $this->paysManager->findAll();
        $pays = [];
        if (is_array($results)) {
            foreach ($results as $result) {
                $pays[] = $this->convert($result);
            }
        }
        return $pays;
    }

}