<?php

namespace App\Controllers\Admin;

use App\Models\Post;
use App\Models\Comment;
use App\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = (new Post($this->getDB()))->all();

        if (isset($_SESSION['user'])) {
            return $this->view('admin.post.index', compact('posts'));
        } else {
            $error = "Veuillez vous connecter";
            return $this->view('connexion',compact('error'));
        }
    }

    public function create()
    {
        return $this->view('admin.post.form');
    }

    public function createPost()
    {
        $post = new Post($this->getDB());

        $result = $post->create($_POST);

        return header('Location: /admin/posts');
    }

    public function edit(int $id)
    {
        $post = (new Post($this->getDB()))->findById($id);

        return $this->view('admin.post.form', compact('post'));
    }

    public function update(int $id)
    {
        $post = new Post($this->getDB());
        $result = $post->update($id, $_POST);

        if ($result) {
            return header('Location: /admin/posts');
        }
    }

    public function destroy(int $id)
    {
        $post = new Post($this->getDB());
        $result = $post->destroy($id);
        // recuperation des commentaires du post
        $comments = new Comment($this->getDB());
        $comments = $comments->getCommentsById($id);
        //on supprime chaque commentaire
        foreach ($comments as $comment) {
            $comment->destroy($comment->id);
        }

        if ($result) {
            return header('Location: /admin/posts');
        }
    }
}
