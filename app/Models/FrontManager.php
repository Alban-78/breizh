<?php

namespace Projet\Models;


class FrontManager extends Manager{

    public function viewFront(){

        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT title FROM test');
        $req->execute(array());
        return $req;
    }

}