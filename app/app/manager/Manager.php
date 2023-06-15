<?php


namespace App\Manager;


use PDO;

class Manager
{
    /**
     * @var PDO
     */
    protected $pdo;
    /**
     * @var string
     */
    protected $table;

    /**
     * Manager constructor.
     * @param PDO $pdo
     * @param string $table
     */
    public function __construct(PDO $pdo, string $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        $stmt = $this->pdo->query('SELECT * FROM ' . $this->table);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return array
     */
    public function findOne(int $id): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}