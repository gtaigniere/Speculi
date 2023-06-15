<?php


namespace App\Service;


use App\Entity\Recette;
use App\Manager\RecetteManager;
use PDO;

class RecetteService extends Service
{
    /**
     * @var RecetteManager
     */
    private $recetteManager;

    /**
     * RecetteService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Recette');
        $this->recetteManager = new RecetteManager($db);
    }

    /**
     * @return Recette[]
     * @throws \Exception
     */
    public function findAll(): array
    {
        $results = $this->recetteManager->findAll();
        /*
        Peut être remplacé par :
        return is_array($results) ? array_map([$this, 'convert'], $results) : [] ;
        */
        $recettes = [];
        if (is_array($results)) { // Le contenu du if peut etre remplacer
            foreach ($results as $result) {
                try {
                    $recettes[] = $this->convert($result);
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }

            }
        }
        return $recettes;
    }

    /**
     *
     */
    public function findOne($id): Recette
    {
        $result = $this->recetteManager->findOne($id);
        return $this->convert($result);
    }

}