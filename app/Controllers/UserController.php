<?php

namespace App\Controllers;

use App\Models\User;
use LengthException;

class UserController extends Controller
{
    public function connexion()
    {
        $user = new User($this->getDB()); 
        //recup les donnees du formulaire login + password
        $connexion = $user->connexion($_POST['login'], $_POST['password']);
        if(count($connexion)>0){
             $_SESSION['user'] = 'ok';
             header("Location: /admin/posts");
        } else {
            $error = "Vérifiez vos identifiants";
            return $this->view('connexion',compact('error'));
        }
        //envoyer ses donnes dans le model User 
       
        
        return $this->view('blog.show', compact('post','comments')); //envoyer les commentaire dans compact  cf tag dans la video
    }

    public function connexionForm()
    {
        return $this->view('connexion');
    }
}