<?php

namespace Projet\Controllers;

class ControllerFront {

    public function home(){


        require 'app/views/FrontEnd/home.php';
    }

    function heritage(){
        
        require 'app/views/FrontEnd/patrimoine.php';
    }

    function food(){

        require 'app/views/FrontEnd/culinaire.php';
    }

    function trip(){

        require 'app/views/FrontEnd/circuits.php';
    }

    function login(){

        require 'app/views/FrontEnd/login.php';
    }

    function mention(){

        require 'app/views/FrontEnd/mentionslegales.php';
    }

    function plan(){

        require 'app/views/FrontEnd/plandesite.php';
    }

    function account(){

        require 'app/views/FrontEnd/account.php';
    }

    function page404(){

        require 'app/views/FrontEnd/page404.php';
    }



     //PERMET DE PRENDRE CONTACT AVEC L'ADMIN
    function contact(){
       
        extract($_POST);
        $validation = true;
        $errors = [];


        if(empty($name) || empty($email) || empty($objet) || empty($content)){
            $validation = false;
            $errors[] = "Tous les champs sont obligatoires !";
        }

        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $validation = false;
            $errors[] = "L'adresse e-mail n'est pas valide !";
        }

        else if($validation){

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
            $contactManager->contact($name,$email,$objet,$content);
        }
        require 'app/views/FrontEnd/home.php';
       
    }

      //PERMET A L'UTILISATEUR DE S'ENREGISTRER SUR LE SITE
      
      function registerUser(){
          
        extract($_POST);
    
        $validation = true;
    
        $errors = [];
    
        if (empty($pseudo) || empty($email) || empty($passwordRegister)) {
            $validation = false;
            $errors[] = 'Tous les champs sont obligatoires !';
        }
    
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $validation = false;
            $errors[] = "L'adresse e-mail n'est pas valide !";
        }
    
    
        else if ($passwordConfRegister != $passwordRegister) {
            $validation = false;
            $errors[] = "Le mot de passe de confirmation est incorrect !";
        }
    
        else if($pseudo) {
            $testPseudo = new \Projet\Models\FrontManager();
            $usersPseudo = $testPseudo->pseudoCheck($pseudo);
            if($usersPseudo == true) {
                 $validation = false;
                $errors[] = 'Ce pseudo est déjà pris !';


            }
            else if ($validation) {
                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $passwordRegister = $_POST['passwordRegister'];
    
                $register = new \Projet\models\FrontManager();
                $register->registerUsers($pseudo,$email,$passwordRegister);
        
                
                unset($_POST['pseudo']);
                unset($_POST['email']);
                unset($_POST['password']);
            }
        }
    
    
    
        require 'app/views/FrontEnd/home.php';
    }

    //PERMET A L'UTILISATEUR DE SE CONNECTER A SON ESPACE 

     function userLogin() {
        extract($_POST);
        $error = 'Les identifiants ne correspondent pas à ceux qui ont été enregistrer !';

        $login = new \Projet\models\FrontManager();
        $login = $login->login($connectName,$connectPassword);

        if(password_verify($connectPassword, $login['password'])){
            $_SESSION['user'] = $login['id'];
            $this->account();
            header('Location: index.php?action=account');
        }else{
            return $error;
        }
    }

    //PERMET A L'UTILISATEUR DE SE DECONNECTER DE SON ESPACE 

     function userLogout(){
        unset($_SESSION["user"]);
        session_destroy();
        $this->home();
    }


    //PERMET A L'UTILISATEUR DE VOIR SES INFOS

     function infos() {
     $usersInfo = new \Projet\models\FrontManager();
     $infos = $usersInfo->usersInfo();
     return $infos;
}
    
    
}












