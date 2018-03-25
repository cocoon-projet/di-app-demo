<?php
namespace Core;

use PDO;
/**
 * Database Class
 */
class Database
{
    /**
     * Pdo object
     *
     * @var object
     */
    private $pdo;
    /**
     * Constructor
     *
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    /**
     * Selection d'une liste de donnée
     *
     * @param string $table
     * @return void
     */
    public function findAll($table)
    {
        return $this->pdo->query('SELECT * FROM articles')->fetchAll();
    }
    /**
     * Selection d'une ligne de la base de donnée
     *
     * @param string $table
     * @param int $id
     * @return void
     */
    public function getById($table, $id)
    {
        $result = $this->pdo->query("SELECT * FROM " .  $table . "  WHERE id=" . $id)->fetchAll();
        return $result[0];
    }
}
