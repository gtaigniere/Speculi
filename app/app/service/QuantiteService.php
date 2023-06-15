<?php


namespace App\Service;


use App\Entity\Quantite;
use App\Manager\QuantiteManager;
use PDO;

class QuantiteService extends Service
{
    /**
     * @var QuantiteManager
     */
    private $quantiteManager;

    /**
     * Quantite constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Quantite');
        $this->quantiteManager = new QuantiteManager($db);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $quantites = $this->quantiteManager->findAll();
        $objs = [];
        foreach ($quantites as $quantite) {
            $objs[] = $this->convert($quantite);
        }
        return $quantites;
    }

}