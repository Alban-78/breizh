<?php
//IMPORTANT POUR LA SECURITE DE VOS SCRIPTS : LES SESSIONS

//DEMARRE UNE SESSION
session_start();

//AUTOLOAD.PHP GENERE AVEC COMPOSER

require_once __DIR__ . '/vendor/autoload.php';

try {
    $controllerFront = new \Projet\Controllers\ControllerFront(); //OBJET CONTROLLER

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
            $controllerFront->login();
        }

        else if($_GET['action'] == 'page404') {
            $controllerFront->page404();
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

        else if($_GET['action'] == 'disconnect') {
            $controllerFront->userLogout();
        }

        else if($_GET['action'] == 'deleteUsers') {
            $controllerFront->deleteUsers();
        }

        elseif ($_GET['action'] == 'changePassword') {
            $controllerFront -> changePassword();
        }

        elseif ($_GET['action'] == 'modifyPassword') {
            $controllerFront -> modifyPassword();
        }

        elseif ($_GET['action'] == 'connected') {
            $controllerFront -> userLogin();
        }




        

   
    }else{
        $controllerFront->home();
    }

}catch (Exception $e) {
    require 'app/views/frontend/errorLoading.php';
}