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

    public function register($pseudo,$email,$emailconf,$password,$passwordconf){
       
        $bdd = $this->dbConnect();
        $register = $bdd->prepare('INSERT INTO register(pseudo, email, emailconf, password, passwordconf) VALUES (:pseudo, :email, :emailconf, :password, :passwordconf)');
        $register->execute([
            'pseudo' => htmlentities($pseudo),
            'email' => htmlentities($email),
            'emailconf' => htmlentities($emailconf),
            'password' => htmlentities($password),
            'passwordconf' => htmlentities($passwordconf)
        ]);
        return $register;



    }

}