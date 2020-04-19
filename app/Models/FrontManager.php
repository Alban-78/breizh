<?php

namespace Projet\Models;


class FrontManager extends Manager{

    public function viewFront(){

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT title, content FROM articles ORDER BY id DESC LIMIT 20');
        $req->execute(array());
        return $req;
    }

    
     //ENVOIE LE FORMULAIRE DE CONTACT

    public function contact($name,$email,$objet,$content){
       
        $bdd = $this->dbConnect();
        $contact = $bdd->prepare('INSERT INTO contact ( name, email, objet, message) VALUES ( ?, ?, ?, ?)');
        $contact->execute(array($name,$email,$objet,$content));
        return $contact;



    }
     //ENREGISTRE UN NOUVEL UTILISATEUR

    public function registerUsers($pseudo,$email,$passwordRegister){
       
        $bdd = $this->dbConnect();
        $register = $bdd->prepare("INSERT INTO register (pseudo, email, password) VALUES ( :pseudo, :email, :password)");
        $register->execute([
            "pseudo" => htmlentities($pseudo),
            "email" => htmlentities($email),
            "password" => password_hash($passwordRegister, PASSWORD_DEFAULT)
        ]);
        
        return $register;



    }
     //VERIFIE SI LE PSEUDO N'A PAS ETE DEJA ENREGISTRER UNE PREMIERE FOIS
     
    public function pseudoCheck($pseudo){
        $bdd = $this->dbConnect();
        $pseudoCheck = $bdd->prepare('SELECT count(*) FROM register WHERE pseudo = ? ');
        $pseudoCheck->execute([$pseudo]);
        $pseudoCheck = $pseudoCheck->fetch()[0];

        return $pseudoCheck;
    }

     //PERMET A L'UTILISATEUR DE SE CONNECTER A SON ESPACE
     
    public function login($connectName,$connectPassword) {
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT id, password FROM register WHERE pseudo = ?');
        $login->execute([$connectName]);
        $login = $login->fetch();

        return $login;
    }


   //RECUPERE LES INFORMATIONS DE L'UTILISATEUR
   
    public function usersInfo() {
        $bdd = $this->dbConnect();
        $infos = $bdd->prepare('SELECT id, email, pseudo FROM users WHERE id = ? ');
        $infos->execute([$_SESSION['user']]);
        $infos = $infos->fetch();
        return $infos;
}
}



