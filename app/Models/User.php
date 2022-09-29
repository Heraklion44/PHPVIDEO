<?php

namespace App\Models;

use App\Models\Model;


class User extends Model
{
    protected $table = 'users';

    public function connexion(string $login, string $password)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE `login` LIKE ? AND `password` LIKE ?", [$login, $password]);
    }

}
