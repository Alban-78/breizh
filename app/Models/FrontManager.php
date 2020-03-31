<?php

namespace Projet\Models;


class FrontManager extends Manager{

    public function viewFront(){

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT title, content FROM articles ORDER BY id DESC LIMIT 20');
        $req->execute(array());
        return $req;
    }

    public function contact(){
       
        $bdd = $this->dbConnect();
        $contact = $bdd->prepare();



    }

}