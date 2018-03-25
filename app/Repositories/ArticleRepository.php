<?php
namespace App\Repositories;

use Core\Database;
/**
 * Articles Repository
 */
class ArticleRepository
{
    /**
     * Database initialisation
     *
     * @var object
     */
    private $db;
    /**
     * Initialisation de la base de donnée
     *
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    /**
     * Retourne la liste des articles
     *
     * @return Database
     */
    public function all()
    {
        return $this->db->findAll('articles');
    }
    /**
     * Retourne un articles
     *
     * @param int $id
     * @return Database
     */
    public function find($id)
    {
        return $this->db->getById('articles', $id);
    }
}
