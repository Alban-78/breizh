<?php
namespace Projet\Models;

class Manager
{
    protected function dbConnect()
    {
        try {
            $host= $_ENV['DB_HOST'];
            $name = $_ENV['DB_DATABASE'];
            $username = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];
        
            $dsn= 'mysql:host='. $host .';dbname='. $name .';charset=utf8';
            $bdd =new \PDO($dsn, $username, $password);

            return $bdd;
        } catch (Exeption $e) {
            die('Erreur : ' . $e->getMessage());
        }
    
        // protected function dbConnect()
    // {
    //     try {
    //         $bdd = new \PDO('mysql:host=localhost;dbname=breizh;charset=utf8', 'root', '');
    //         return $bdd;
    //     } catch (Exception $e) {
    //         die('Erreur : ' . $e->getMessage());
    //     }
    // }
    }
}
