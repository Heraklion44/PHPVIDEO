<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = (new Comment($this->getDB()))->getCommentsToCheck();

        if (isset($_SESSION['user'])) {
            return $this->view('admin.comment.index', compact('comments'));
        } else {
            $error = "Veuillez vous connecter";
            return $this->view('connexion',compact('error'));
        }

        
    }

    public function destroy(int $id)
    {
        $comment = new Comment($this->getDB());
        $result = $comment->destroy($id);

        if ($result) {
            return header('Location: /admin/comments');
        }
    }

    public function keep(int $id)
    {
        $data = ['is_checked'=>1];
        $result = (new Comment($this->getDB()))->update($id, $data);

        if ($result) {
            return header('Location: /admin/comments');
        }
    }

    public function report(int $id)
    {
        $data = ['is_report'=>1];
        $result = (new Comment($this->getDB()))->update($id, $data);

        if ($result) {
            return header('Location: /posts/'.$_POST['postId']);
        }
    }

    public function createComment()
    {
        $comment = new Comment($this->getDB());

        $result = $comment->create($_POST);

        return header('Location: /posts/'.$_POST['post_id']);
    }



}