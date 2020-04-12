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

        else if($_GET['action'] == 'food') {
            $controllerFront->food();
        }

        else if($_GET['action'] == 'trip') {
            $controllerFront->trip();
        }

        else if($_GET['action'] == 'login') {
            $controllerFront->loginUsers();
        }

        else if($_GET['action'] == 'plan') {
            $controllerFront->plan();
        }

        else if($_GET['action'] == 'mention') {
            $controllerFront->mention();
        }

        else if($_GET['action'] == 'register') {
            $controllerFront->registerUser();
        }

        else if($_GET['action'] == 'contact') {
            $controllerFront->contact();
        }

        else if($_GET['action'] == 'account') {
            $controllerFront->account();
        }



    }else{
        $controllerFront->home();
    }

}catch (Exception $e) {
    require 'app/views/frontend/errorLoading.php';
}