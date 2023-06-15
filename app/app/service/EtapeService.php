<?php


namespace App\Service;

use App\Entity\Etape;
use App\Manager\EtapeManager;
use PDO;

class EtapeService extends Service
{
    /**
     * @var EtapeManager
     */
    private $etapeManager;

    /**
     * EtapeService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Etape');
        $this->etapeManager = new EtapeManager($db);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $etapes = $this->etapeManager->findAll();
        $objs = [];
        foreach($etapes as $etape) {
            $objs[] = $this->convert($etape);
        }
        return $objs;
    }

}