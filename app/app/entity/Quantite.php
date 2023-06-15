<?php


namespace App\Entity;


class Quantite implements Entity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $nombre;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNombre(): int
    {
        return $this->nombre;
    }

    /**
     * @param int $nombre
     */
    public function setNombre(int $nombre): void
    {
        $this->nombre = $nombre;
    }

}