<?php
//Important pour la sécurité de vos scripts : les sessions
//Démarre une session
session_start();

// autoload.php génère avec composer

require_once __DIR__ . '/vendor/autoload.php';

try {
    $controllerFront = new \Projet\Controllers\ControllerFront(); //Objet controler

    if (isset($_GET['action'])) {
        if($_GET['action'] == 'actus'){
            $controllerFront->actus();
              
        }
        else if($_GET['action'] == 'heritage') {
            $controllerFront->heritage();
        }

        else if($_GET['action'] == 'plan') {
            $controllerFront->plan();
        }

    }else{
        $controllerFront->home();
    }

}catch (Exception $e) {
    require 'app/views/frontend/errorLoading.php';
}