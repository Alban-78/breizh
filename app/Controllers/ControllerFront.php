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