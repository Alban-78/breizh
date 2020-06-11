<?php
//IMPORTANT POUR LA SECURITE DE VOS SCRIPTS : LES SESSIONS

//DEMARRE UNE SESSION
session_start();

// AUTOLOAD.PHP GENERE AVEC COMPOSER

require_once __DIR__ . '/vendor/autoload.php';

try {
    $controllerBack = new \Projet\Controllers\ControllerBack(); //OBJET CONTROLLER

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'connected') {
            $controllerBack -> adminLogin();
        } elseif ($_GET['action'] == 'connected') {
            $controllerBack -> addAdmin();
        } elseif ($_GET['action'] == 'registerAdmin') {
            $controllerBack -> registerAdmin();
        } elseif ($_GET['action'] == 'articles') {
            $controllerBack -> articles();
        } elseif ($_GET['action'] == 'newArticle') {
            $controllerBack -> newArticle();
        }
    } else {
        $controllerBack->login();
    }
} catch (Exception $e) {
}
