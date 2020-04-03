<?php

if(!empty($_POST)){
    $register = new Projet\Controllers\ControllerFront();
    $errors = $register->registerUsers();
}
?>
<body>
    <header>
        <div class="paper">
        </div>
        <div class="title">
        <h1>TRO-VALE<br>BREIZH <span class="black">.</span></h1>
        </div>
        <img src="app/public/Images/drapeau.png" class="drapeau" alt="drapeau-breton">
        
        <nav class="menuprincipal">

        <input type="checkbox" id="menumobile" role="button">
            <label for="menumobile" class="menumobile">
                <img src="app/public/Images/burger.png">
            </label>

            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="index.php?action=heritage">Patrimoine</a></li>
                <li><a href="index.php?action=food">Excursions culinaires</a></li>
                <li><a href="index.php?action=trip">Circuits</a></li>
                <li><a href="index.php?action=connect">Se connecter</a></li>
                <li><a href="#modal1" class="js-modal">S'inscrire</a></li>

                <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">

                   <div class="modal-wrapper js-modal-stop">
                       <button class="js-modal-close">Fermer</button>
                    <h1 id="titlemodal">INSCRIPTION</h1>
                <!-- <form name="mon-formulaire1" action="page-envoi.html" method="get"> -->
                <form name="mon-formulaire1" method="post" action="">
        <?php
        if(isset($errors)) :
        if($errors) :
        foreach($errors as $error) :
        ?>

            <div class="row">
                <div>
                    <div class="message erreur"><?= $error ?></div>
                </div>
            </div>

            <?php
             endforeach;
             else :
            ?>


            <div class="row">
                <div>
                    <div class="message confirmation">Votre inscription a bien été envoyé !</div>
                </div>
            </div>


            <?php
            endif;
            endif
            ?>
              <p>
                  <input type="radio" name="civi" value="Mme" /> Madame
                  <input type="radio" name="civi" value="Mlle" /> Mademoiselle
                  <input type="radio" name="civi" value="Mr" /> Monsieur
              </p>

              <p>
                 Votre Nom :<br />
                  <input type="text" name="pseudo" value="<?php if(isset($_POST["pseudo"]))echo $_POST["pseudo"] ?>" />
              </p>

              <p>
                 Votre Mail :<br />
                  <input type="text" name="email" value="<?php if(isset($_POST["email"]))echo $_POST["email"] ?>" />
              </p>

              <p>
                Confirmation de votre Mail :<br />
                  <input type="text" name="emailConf" value="<?php if(isset($_POST["emailConf"]))echo $_POST["emailConf"] ?>" />
              </p>


              <p>
                Votre Mot de Passe :<br />
                  <input type="password" name="password" value="" />
             </p>

             <p>
                Confirmation de votre Mot de Passe :<br />
                  <input type="password" name="passwordConf" value="" />
             </p>
             <br>
             <p>
                 <input type="submit" value="Envoyer" />
                 <input type="reset" value="Annuler" />
            </p>

                </form>

                </div>
                
                </aside>
            


            </ul>

        </nav>
    </header>