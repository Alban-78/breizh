<?php
namespace Projet\Models;

class Manager
{
    protected function dbConnect()
    {
        try {
            $bdd = new \PDO('mysql:host=alban56.alwaysdata.net;dbname=alban56_breizh;charset=utf8', 'alban56', 'Sacramento78250');
            return $bdd;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
