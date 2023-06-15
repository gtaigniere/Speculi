<?php


namespace App\Service;


use App\Entity\Entity;
use App\Entity\Recette;
use Exception;

abstract class Service
{
    /**
     * @var string
     */
    private $objectName;

    /**
     * Service constructor.
     * @param string $objectName
     */
    public function __construct(string $objectName)
    {
        $this->objectName = $objectName;
    }

    /**
     * Convertie un tableau associatif correspondant à une ligne de la table ($this->table) sous la forme clef=>valeur
     * @param array $values
     * @return Entity
     * @throws Exception
     */
    protected function convert(array $values): Entity
    {
        if (class_exists($this->objectName)) {
            $obj = new $this->objectName();
            foreach ($values as $key => $value) {
                $setter = 'set' . ucfirst($key);
                if (!is_null($value) && method_exists($obj, $setter)) {
                    $obj->$setter($value);
                }
            }
            return $obj;
        } else {
            throw new Exception('Entity not found !');
        }
    }
}