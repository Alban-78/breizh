<?php

namespace Projet\models;

class BackManager extends Manager
{
    public function viewBack()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('Methode sql');
        $req->execute(array());
        return $req;
    }
    

    public function login($connectNameAdmin)
    {
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT * FROM admin WHERE pseudo = ?');
        $login->execute([$connectNameAdmin]);
        
        
        $login = $login->fetch();
        return $login;
    }

    //ENREGISTRE UN NOUVEL ADMIN

    public function adminRegister($email, $pseudo, $password)
    {
        $bdd = $this->dbConnect();
        $register = $bdd->prepare('INSERT INTO admin(email, pseudo, password) VALUES (:email, :pseudo, :password)');
        $register->execute([
            'email' => htmlentities($email),
            'pseudo' => htmlentities($pseudo),
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
        return $register;
    }
    //PERMET D'AJOUTER UN ARTICLE

    public function addArticle($title, $description, $upload_img)
    {
        $bdd = $this->dbConnect();
        $addArticle = $bdd->prepare('INSERT INTO articles(title, admin_id, content, image) VALUES (:title, :admin_id, :content, :image)');
        $addArticle->execute([
            'admin_id' => $_SESSION['admin'],
            'title' => htmlentities($title),
            'content' => htmlentities($description),
            'image' => $upload_img
        ]);
        return $addArticle;
    }
}
