<?php


namespace App\Entity;


class Recette implements Entity
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $libelle;
    /**
     * @var string
     */
    private $photo;
    /**
     * @var string
     */
    private $type;
    /**
     * @var int
     */
    private $pourCombien;
    /**
     * @var bool
     */
    private $vegetarienne;
    /**
     * @var int
     */
    private $idPays;

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
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPourCombien(): int
    {
        return $this->pourCombien;
    }

    /**
     * @param int $pourCombien
     */
    public function setPourCombien(int $pourCombien): void
    {
        $this->pourCombien = $pourCombien;
    }

    /**
     * @return bool
     */
    public function isVegetarienne(): bool
    {
        return $this->vegetarienne;
    }

    /**
     * @param bool $vegetarienne
     */
    public function setVegetarienne(bool $vegetarienne): void
    {
        $this->vegetarienne = $vegetarienne;
    }

    /**
     * @return int
     */
    public function getIdPays(): int
    {
        return $this->idPays;
    }

    /**
     * @param int $idPays
     */
    public function setIdPays(int $idPays): void
    {
        $this->idPays = $idPays;
    }

}