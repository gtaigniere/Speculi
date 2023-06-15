<?php


namespace App\Entity;


class Ingredient implements Entity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $infos;

    /**
     * @var int
     */
    private $idQuan;

    /**
     * @var int
     */
    private $idMesu;

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
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getInfos(): string
    {
        return $this->infos;
    }

    /**
     * @param string $infos
     */
    public function setInfos(string $infos): void
    {
        $this->infos = $infos;
    }

    /**
     * @return int
     */
    public function getIdQuan(): int
    {
        return $this->idQuan;
    }

    /**
     * @param int $idQuan
     */
    public function setIdQuan(int $idQuan): void
    {
        $this->idQuan = $idQuan;
    }

    /**
     * @return int
     */
    public function getIdMesu(): int
    {
        return $this->idMesu;
    }

    /**
     * @param int $idMesu
     */
    public function setIdMesu(int $idMesu): void
    {
        $this->idMesu = $idMesu;
    }

}