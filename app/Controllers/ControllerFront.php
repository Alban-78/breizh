<?php

namespace Projet\Controllers;

class ControllerFront
{
public function home(){
    $homeFront = new \Projet\Models\FrontManager();
    $articles = $homeFront->viewFront();
    
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
    $contact= contact();

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


function mention(){

    require 'app/views/FrontEnd/mentionslegales.php';
}

function plan(){

    require 'app/views/FrontEnd/plandesite.php';
}



}