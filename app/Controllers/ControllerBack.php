<?php

namespace Projet\Controllers;

class ControllerBack
{
    public function login()
    {
        require 'app/views/BackEnd/loginAdmin.php';
    }

    public function addAdmin()
    {
        require 'app/views/BackEnd/addAdmin.php';
    }


    public function admin()
    {
        require 'app/views/BackEnd/admin.php';
    }



    //PERMET A L'ADMINISTRATEUR DE SE CONNECTER A SON ESPACE

    public function adminLogin()
    {
        extract($_POST);
        $error = 'Les identifiants ne correspondent pas à ceux qui ont été enregistrer !';

        $login = new \Projet\models\BackManager();
        $login = $login->login($connectNameAdmin);
        
        if (password_verify($connectPasswordAdmin, $login['password'])) {
            $_SESSION['admin'] = $login['id'];
            $_SESSION['pseudo'] = $login['pseudo'];
            
          
            $this->admin();
        } else {
            return $error;
        }
    }



    public function articles()
    {
        require 'app/views/BackEnd/articles.php';
    }

    //PERMET A L'ADMIN DE CREER DES ARTICLES

    public function newArticle()
    {
        extract($_POST);
        $validation = true;
        $errors = [];
        $upload_imgs = "app/public/Images/";
        $upload_img = $upload_imgs.basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($upload_img, PATHINFO_EXTENSION));

        if (empty($title) || empty($description)) {
            $validation = false;
            $errors[] = "Tous les champs sont obligatoires !";
        } elseif ($validation) {
            $article = new \Projet\models\BackManager();
            $article->addArticle($title, $description, $upload_img);
            
            header('Location: index.php?action=heritage');
        }
    }
}
