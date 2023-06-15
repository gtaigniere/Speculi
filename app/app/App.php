<?php


namespace App;


use PDO;

define("App\CONFIG", [
    'db_host' => 'mysql',
    'db_name' => $_ENV['MYSQL_DATABASE'],
    'db_user' => $_ENV['MYSQL_USER'],
    'db_pass' => $_ENV['MYSQL_PASSWORD']
]);

class App
{
    /**
     * @var App
     */
    private static $instance; // Instance unique de la classe
    /**
     * @var string
     */
    private $titre = 'Spécialités culinaires';
    /**
     * @var PDO
     */
    private $db;

    private function __construct()
    {
        // Constructeur privé pour empêcher la création de nouvelles instances de la classe
    }

    /**
     * @return mixed
     */
    public static function getInstance(): App
    {
        if (is_null(self::$instance)) {
            self::$instance = new App();
        }
        return self::$instance;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return PDO
     */
    public function getDb(): PDO
    {
        if (is_null($this->db)) {
            $this->db = new PDO("mysql:dbname=". CONFIG['db_name'] .";host=" . CONFIG['db_host'], CONFIG['db_user'], CONFIG['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        return $this->db;
    }

}