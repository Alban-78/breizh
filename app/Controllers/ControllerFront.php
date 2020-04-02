<?php

namespace Projet\Controllers;

class ControllerFront
{
public function home(){
    $homeFront = new \Projet\Models\FrontManager();
    $articles = $homeFront->viewFront();

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

function connect(){

    require 'app/views/FrontEnd/connection.php';
}


function mention(){

    require 'app/views/FrontEnd/mentionslegales.php';
}

function plan(){

    require 'app/views/FrontEnd/plandesite.php';
}




function contact(){

    extract($_POST);

    $validation = true;

    $errors = [];


    if(empty($name) || empty($email) || empty($objet) || empty($message)){
        $validation = false;

        $errors[] = "Tous les champs sont obligatoires !";
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validation = false;

        $errors[] = "L'adresse e-mail n'est pas valide !";
    }

    else if($validation){

        $contact = new \Projet\models\FrontManager();
        $message = $contact->contact($name,$email,$objet,$message);

        $to = 'albanhusar@hotmail.fr';
        $sujet = 'Nouveau message de ' . $name;
        $message = '
        <h1>Nouveau message de ' . $name . '</h1>
        <h2>Adresse e-mail: ' . $email .'</h2>
        <h3>Objet: ' . nl2br($objet) .'</h3>
        <p>' . nl2br($message) . '</p>
        
        ';
        $headers = 'From' . $name . ' <' . $email . '>' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        mail($to, $sujet, $message, $headers);
        // unset($_POST['name']);
        // unset($_POST['email']);
        // unset($_POST['objet']);
        // unset($_POST['message']);
    }
    
    return $errors;
}
}



function register(){
    global $bdd;

    extract($_POST);

    $validation = true;

    $errors = [];

    if (empty($pseudo) || empty($email) || empty($emailconf) || empty($password) || empty($passwordconf)) {
        $validation = false;
        $errors[] = 'Tous les champs sont obligatoires !';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $errors[] = "L'adresse e-mail n'est pas valide !";
    }

    if ($emailconf != $email) {
        $validation = false;
        $errors[] = "L'adresse e-mail de confirmation est incorrecte !";
    }

    if ($passwordconf != $password) {
        $validation = false;
        $errors[] = "Le mot de passe de confirmation est incorrect !";
    }

    if (pseudo_check($pseudo)) {
        $validation = false;
        $errors[] = 'Ce pseudo est déjà pris !';
    }

    if ($validation) {
        $register = $bdd->prepare('INSERT INTO users(pseudo, email, password) VALUES (:pseudo, :email, :password)');
        $register->execute([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);

        unset($_POST['pseudo']);
        unset($_POST['email']);
        unset($_POST['emailconf']);
    }

    return $errors;
}








