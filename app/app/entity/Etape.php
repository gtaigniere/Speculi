<?php


namespace App\Entity;


class Etape implements Entity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $num;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var int
     */
    private $idRec;

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
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return string
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail(string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * @return int
     */
    public function getIdRec(): int
    {
        return $this->idRec;
    }

    /**
     * @param int $idRec
     */
    public function setIdRec(int $idRec): void
    {
        $this->idRec = $idRec;
    }

}
