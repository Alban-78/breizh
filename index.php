<?php

//IMPORTANT POUR LA SECURITE DE VOS SCRIPTS : LES SESSIONS

//DEMARRE UNE SESSION
session_start();

//AUTOLOAD.PHP GENERE AVEC COMPOSER
require_once __DIR__  . '/vendor/autoload.php';

if(file_exists(__DIR__ . '/.env')){
    $dotenv = \Dotenv\Dotenv::createimmutable(__DIR__);
    $dotenv->load();
}


try {
    $controllerFront = new \Projet\Controllers\ControllerFront(); //OBJET CONTROLLER

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'actus') {
            $controllerFront->actus();
        } elseif ($_GET['action'] == 'heritage') {
            $controllerFront->heritage();
        } elseif ($_GET['action'] == 'food') {
            $controllerFront->food();
        } elseif ($_GET['action'] == 'trip') {
            $controllerFront->trip();
        } elseif ($_GET['action'] == 'login') {
            $controllerFront->login();
        } elseif ($_GET['action'] == 'page404') {
            $controllerFront->page404();
        } elseif ($_GET['action'] == 'plan') {
            $controllerFront->plan();
        } elseif ($_GET['action'] == 'mention') {
            $controllerFront->mention();
        } elseif ($_GET['action'] == 'register') {
            $controllerFront->registerUser();
        } elseif ($_GET['action'] == 'contact') {
            $controllerFront->contact();
        } elseif ($_GET['action'] == 'account') {
            $controllerFront->account();
        } elseif ($_GET['action'] == 'disconnect') {
            $controllerFront->userLogout();
        } elseif ($_GET['action'] == 'deleteUsers') {
            $controllerFront->deleteUsers();
        } elseif ($_GET['action'] == 'changePassword') {
            $controllerFront -> changePassword();
        } elseif ($_GET['action'] == 'modifyPassword') {
            $controllerFront -> modifyPassword();
        } elseif ($_GET['action'] == 'connected') {
            $controllerFront -> userLogin();
        } 
    } else {
        $controllerFront->home();
    }
} catch (Exception $e) {
    require 'app/views/frontend/errorLoading.php';
}
