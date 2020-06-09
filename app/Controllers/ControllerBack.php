<?php

namespace Projet\Controllers;

class ControllerBack {

    public function login(){


        require 'app/views/BackEnd/loginAdmin.php';
    }

    public function addAdmin(){


        require 'app/views/BackEnd/addAdmin.php';
    }


    function admin()
    {
        

        require 'app/views/BackEnd/admin.php';
    }



    //PERMET A L'ADMINISTRATEUR DE SE CONNECTER A SON ESPACE 

    function adminLogin() {
        
        extract($_POST);
        $error = 'Les identifiants ne correspondent pas à ceux qui ont été enregistrer !';

        $login = new \Projet\models\BackManager();
        $login = $login->login($connectNameAdmin);
        
        if(password_verify($connectPasswordAdmin, $login['password'])){
         
            $_SESSION['admin'] = $login['id'];
            $_SESSION['pseudo'] = $login['pseudo'];
            
          
            $this->admin();
            
        }else{
            return $error;
        }
    }

    //PERMET A UN ADMIN DE S'ENREGISTRER SUR LE SITE
      
    // function registerAdmin() {
    //     extract($_POST);
    //     $validation = true;
    //     $errors = [];

    //     if(empty($pseudo) || empty($email) || empty($password) ){
    //         $validation = false;
    //         $errors[] = 'Tous les champs sont obligatoires !!!'; 
    //     }

    //     if($verifyPassword != $password){
    //         $validation = false;
    //         $errors[] = 'le mot de passe de confirmation est incorrect !!!';
    //     }

    //     if($validation){
    //         $register = new \Project\models\BackManager();
    //         $usersRegister = $register->adminRegister($email,$pseudo,$password);
    //         $this->login();
    //         unset($_POST['pseudo']);
    //         unset($_POST['email']);
    //     }
    // }

    function articles() {

        require 'app/views/BackEnd/articles.php';
    }

    //PERMET A L'ADMIN DE CREER DES ARTICLES

    function newArticle(){
        
        extract($_POST);
        $validation = true;
        $errors = [];
        $upload_imgs = "app/public/Images/";
        $upload_img = $upload_imgs.basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($upload_img,PATHINFO_EXTENSION));

        if(empty($title) || empty($description)){
            $validation = false;
            $errors[] = "Tous les champs sont obligatoires !";
        }
        
        // if (!file_exists($image)){
        //     $validation = false;
        //     $errors[] = "Image please !";
        // }
        

        else if ($validation) {
            
            $article = new \Projet\models\BackManager();
            $article->addArticle($title, $description, $upload_img);
            
            header('Location: index.php?action=heritage');
             
            
            

        }
        
         //PERMET DE SUPPRIMER UN ARTICLE

        function deleteArticle($id) {
            
            $article = new \Projet\models\BackManager();
            $image = $article->deleteArticleImg();
            unlink("app/public/Images/articles/".$image);
            $article = new \Projet\models\BackManager();
            $delete = $article->deleteArticleContent();
            $this->admin();
            return $delete;
        }

        

    }


    







}