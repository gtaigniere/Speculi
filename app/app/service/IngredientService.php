<?php


namespace App\Service;


use App\Manager\IngredientManager;
use PDO;

class IngredientService extends Service
{
    /**
     * @var IngredientManager
     */
    private $ingredientManager;

    /**
     * IngredientService constructor.
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        parent::__construct('App\Entity\Ingredient');
        $this->ingredientManager = new IngredientManager($db);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function findAll(): array
    {
        $ingredients = $this->ingredientManager->findAll();
        // array_map([$this, 'convert' ], $ingredients);
        $objs = [];
        foreach($ingredients as $ingredient) {
            $objs[] = $this->convert($ingredient);
        }
        return $objs;
    }

}