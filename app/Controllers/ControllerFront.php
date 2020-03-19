<?php

namespace Projet\Controllers;

class ControllerFront
{
function home(){
    $homeFront = new \Projet\Models\FrontManager();
    $accueil = $homeFront->viewFront();
    
    require 'app/views/FrontEnd/home.php';
}

function heritage(){
    
    require 'app/views/FrontEnd/patrimoine.php';
}

}