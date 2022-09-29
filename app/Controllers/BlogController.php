<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Comment;

class BlogController extends Controller
{
    public function welcome()
    {
        $post = new Post($this->getDB());
        $post = $post->getLastPost();
        return $this->view('blog.welcome', compact('post'));
    }

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();
        

        return $this->view('blog.index', compact('posts'));
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);
        //recuperer les commentaires dans une variable
        $comments = new Comment($this->getDB());
        $comments = $comments->getCommentsById($id);

        return $this->view('blog.show', compact('post','comments')); //envoyer les commentaire dans compact  cf tag dans la video
    }
}