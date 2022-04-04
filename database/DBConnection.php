<?php

namespace Database;

/**
 * Classe native de php pour se connecter a la base donnee
 */

use PDO;

class DBConnection
{

    private $dbname;
    private $host;
    private $username;
    private $passeword;
    private $pdo;

    public function __construct(string $dbname, string $host, string $username, string $passeword)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->passeword = $passeword;
    }

    public function getPDO(): PDO
    {
        if ($this->pdo == null) {
            $this->pdo = new PDO(
                "mysql:dbname={$this->dbname};host={$this->host}",
                $this->username,
                $this->passeword,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ],
                
            );
        }

        return $this->pdo;
    }
}
