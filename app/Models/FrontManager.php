<?php

namespace Projet\Models;


class FrontManager extends Manager{

    public function viewFront(){

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT title, content FROM articles ORDER BY id DESC LIMIT 20');
        $req->execute(array());
        return $req;
    }

    

    public function contact($name,$email,$objet,$message){
       
        $bdd = $this->dbConnect();
        $contact = $bdd->prepare('INSERT INTO contact(name, email, objet, message) VALUES (:name, :email, :objet, :message)');
        $contact->execute([
            'name' => htmlentities($name),
            'email' => htmlentities($email),
            'objet' => htmlentities($objet),
            'message' => htmlentities($message)
        ]);
        return $contact;



    }

    public function register($pseudo,$email,$password){
       
        $bdd = $this->dbConnect();
        $register = $bdd->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :password)');
        $register->execute([
            "name" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        return $register;



    }

}