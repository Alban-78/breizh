<?php

namespace Projet\Controllers;

class ControllerFront
{
    public function home()
    {
        require 'app/views/FrontEnd/home.php';
    }

    public function heritage()
    {
        $allArticles  = new \Projet\Models\FrontManager();
        $articles = $allArticles->articles();
        
        require 'app/views/FrontEnd/patrimoine.php';
    }

    public function food()
    {
        require 'app/views/FrontEnd/culinaire.php';
    }

    public function trip()
    {
        require 'app/views/FrontEnd/circuits.php';
    }

    public function login()
    {
        require 'app/views/FrontEnd/login.php';
    }

    public function mention()
    {
        require 'app/views/FrontEnd/mentionslegales.php';
    }

    public function plan()
    {
        require 'app/views/FrontEnd/plandesite.php';
    }

    public function account()
    {
        require 'app/views/FrontEnd/account.php';
    }

    public function page404()
    {
        require 'app/views/FrontEnd/page404.php';
    }

    public function pageDeleteUsers()
    {
        require 'app/views/FrontEnd/deleteUsers.php';
    }

    public function modifyPassword()
    {
        require 'app/views/FrontEnd/modifyPassword.php';
    }




    //PERMET DE PRENDRE CONTACT AVEC L'ADMIN
    public function contact()
    {
        extract($_POST);
        $validation = true;
        $errors = [];

       
        if (empty($name) || empty($email) || empty($objet) || empty($content)) {
            $validation = false;
            $errors[] = "Tous les champs sont obligatoires !";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validation = false;
            $errors[] = "L'adresse e-mail n'est pas valide !";
        } elseif ($validation) {
            $to = 'albanhusar@hotmail.fr';
            $sujet = 'Nouveau message de ' . $name;
            $message = '
            <h1>Nouveau message de ' . $name . '</h1>
            <h2>Adresse e-mail: ' . $email .'</h2>
            <h3>Objet: ' . nl2br($objet) .'</h3>
            <p>' . nl2br($content) . '</p>';
            $headers = 'From' . $name . ' <' . $email . '>' . "\r\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            mail($to, $sujet, $message, $headers);

            
            unset($_POST['name']);
            unset($_POST['email']);
            unset($_POST['objet']);
            unset($_POST['content']);

            $contactManager = new \Projet\Models\FrontManager();
            $contactManager->contact($name, $email, $objet, $content);
        }
        
        $this->home();
    }

    //PERMET A L'UTILISATEUR DE S'ENREGISTRER SUR LE SITE
      
    public function registerUser()
    {
        extract($_POST);
    
        $validation = true;
    
        $errors = [];
    
        if (empty($pseudo) || empty($email) || empty($adress) || empty($passwordRegister)) {
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validation = false;
            $errors[] = "L'adresse e-mail n'est pas valide !";
        }
    
    
        if ($passwordConfRegister != $passwordRegister) {
            $validation = false;
            $errors[] = "Le mot de passe de confirmation est incorrect !";
        }
    
        if ($pseudo) {
            $testPseudo = new \Projet\Models\FrontManager();
            $usersPseudo = $testPseudo->pseudoCheck($pseudo);
            if ($usersPseudo == true) {
                $validation = false;
                $errors[] = 'Ce pseudo est déjà pris !';
            }
        }
        if ($validation) {
            $register = new \Projet\Models\FrontManager();
            $usersRegister = $register->registerUsers($pseudo, $email, $adress, $passwordRegister);
            
            unset($_POST['pseudo']);
            unset($_POST['email']);
            unset($_POST['adress']);
            unset($_POST['password']);
        }
    

        
        $this->home();
    }

    //PERMET A L'UTILISATEUR DE SE CONNECTER A SON ESPACE

    public function userLogin()
    {
        extract($_POST);
        $error = 'Les identifiants ne correspondent pas à ceux qui ont été enregistrer !';

        $login = new \Projet\Models\FrontManager();
        $login = $login->login($connectName);

        if (password_verify($connectPassword, $login['password'])) {
            $_SESSION['user'] = $login['id'];
            $_SESSION['pseudo'] = $login['pseudo'];
            
            $this->account();
        } else {
            return $error;
        }
    }

    //PERMET A L'UTILISATEUR DE SE DECONNECTER DE SON ESPACE MEMBRE

    public function userLogout()
    {
        unset($_SESSION["user"]);
        session_destroy();
        $this->home();
    }


    //PERMET A L'UTILISATEUR DE VOIR SES INFOS

    public function infos()
    {
        $usersInfo = new \Projet\Models\FrontManager();
        $infos = $usersInfo->usersInfo();
        return $infos;
    }


    //PERMET A L'UTILISATEUR DE SUPPRIMER SON ESPACE MEMBRE

    public function deleteUsers()
    {
        $users = new \Projet\Models\FrontManager();
        $id = $_SESSION['user'];
        $usersDelete = $users->deleteUsers($id);
        unset($_SESSION['user']);
        session_destroy();
        $this->home();
    }

    //PERMET A L'UTILISATEUR DE MODIFIER SON MOT DE PASSE

    public function changePassword()
    {
        if (isset($_SESSION['user'])) {
            extract($_POST);
            $validation = true;
            $errors = [];
            
        
            if (empty($password) || empty($newPassword) || empty($verifyNewPassword)) {
                $validation = false;
                $errors[] = 'Tous les champs sont obligatoires !!!';
            }

            if ($verifyNewPassword != $newPassword) {
                $validation = false;
                $errors[] = 'le mot de passe de confirmation est incorrect !!!';
            }

            if (!empty($password)) {
                $id = $_SESSION['user'];
                $testPassword = new \Projet\Models\FrontManager();
                $passwordCheck = $testPassword-> passwordCheck();
                if (!password_verify($password, $passwordCheck)) {
                    $validation = false;
                    $errors[] = "Ce mot de passe n'est pas le bon !";
                }
            }
           

            if ($validation) {
                $changePassword = new \Projet\Models\FrontManager();
                $passwordchange = $changePassword->changeUsersPassword($newPassword);
                $this->modifyPassword();
            }
            return $errors;
        }
    }
}
