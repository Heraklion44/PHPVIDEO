<?php

namespace App\Models;

use DateTime;

class Post extends Model {
    protected $table = 'posts'; 

    public function getCreatedAt(): string
    {
        return (new DateTime($this->created_at))->format('d/m/y à H:i');
    }

    public function getExcerpt(): string
    {
        return substr($this->content, 0, 200) . '...';
    }

    public function getButton(): string
    {
        return <<<HTML
        <a href="/posts/$this->id" class="btn btn-primary">Lire l'article</a>
HTML;        
    }
}