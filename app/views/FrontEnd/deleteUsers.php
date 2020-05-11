<?php
$users = new \Projet\controllers\ControllerFront();
$users->deleteUsers(); 

$redirection = new \Projet\controllers\ControllerFront();
$redirection->home();
