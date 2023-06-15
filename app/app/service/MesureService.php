<?php


namespace App\Service;


use App\Entity\Mesure;
use App\Manager\MesureManager;
use PDO;

class MesureService extends Service
{
    /**
     * @var MesureManager
     */
    private $mesureManager;

    /**
     * MesureService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Mesure');
        $this->mesureManager = new MesureManager($db);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $mesures = $this->mesureManager->findAll();
        $objs = [];
        foreach($mesures as $mesure) {
            $objs[] = $this->convert($mesure);
        }
        return $objs;
    }

}