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
     
    public function login($connectName) {
        
        $bdd = $this->dbConnect();
        $login = $bdd->prepare('SELECT * FROM register WHERE pseudo = ?');
        $login->execute([$connectName]);
        $login = $login->fetch();
        return $login;
    }


   //RECUPERE LES INFORMATIONS DE L'UTILISATEUR
   
    public function usersInfo() {
        $bdd = $this->dbConnect();
        $infos = $bdd->prepare('SELECT id, pseudo, password FROM register WHERE id = ? ');
        $infos->execute([$_SESSION['user']]);
        $infos = $infos->fetch();
        return $infos;
}

   // PERMET A L'UTILISATEUR DE SUPPRIMER SON COMPTE

    public function deleteUsers($id) {
        $bdd = $this->dbConnect();
        $id = (int)$_GET['id'];
        $usersDelete = $bdd->prepare('DELETE FROM register WHERE  id = ?');
        $usersDelete->execute([$id]);
        return $usersDelete;
}

    // PERMET A L'UTILISATEUR DE MODIFIER SON MOT DE PASSE

    public function changeUsersPassword($newPassword) {
        $bdd = $this->dbConnect();
        $changePassword = $bdd->prepare('UPDATE FROM register SET password = :password WHERE id = :id');
        $changePassword->execute([
            'password' =>  password_hash($newPassword, PASSWORD_DEFAULT),
            'id' => $_SESSION['user']
        ]);
        return $changePassword;
    }

}



