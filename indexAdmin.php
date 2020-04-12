<?php
//Important pour la sécurité de vos scripts : les sessions
//Démarre une session
session_start();

// autoload.php génère avec composer

require_once __DIR__ . '/vendor/autoload.php';

try {
    $controllerBack = new \Projet\Controllers\ControllerBack(); //Objet controler

    if (isset($_GET['action'])) {


        


    }else{
        $controllerFront->login();
    }

}catch (Exception $e) {
    
}