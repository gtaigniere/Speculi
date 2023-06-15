<?php


namespace App\Entity;


class Mesure implements Entity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $unite;

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
     * @return string
     */
    public function getUnite(): string
    {
        return $this->unite;
    }

    /**
     * @param string $unite
     */
    public function setUnite(string $unite): void
    {
        $this->unite = $unite;
    }

}