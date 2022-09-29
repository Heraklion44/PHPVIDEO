<?php

namespace App\Models;

use DateTime;
use App\Models\Model;


class Comment extends Model
{
    protected $table = 'comments';

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/y à H:i');
    }

    public function getCommentsById(int $postId)
    {
        return $this->query("SELECT * FROM {$this->table} WHERE post_id = ?", [$postId]);
    }
    
    public function getCommentsToCheck()
    {
        return $this->query("SELECT * FROM {$this->table} WHERE is_checked is NULL and is_report = 1");
    }
}
