<?php
// if (!empty($_POST)) {
//     $registerS = new Projet\Controllers\ControllerFront();
//     $errors = $registerS->registerUser();
// }
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

            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="index.php?action=heritage">Patrimoine</a></li>
                <li><a href="index.php?action=food">Excursions culinaires</a></li>
                <li><a href="index.php?action=trip">Circuits</a></li>
                <?php if(isset($_SESSION['user'])) : ?>
                <li><a href="index.php?action=account">Mon compte</a></li>
                <li><a href="index.php?action=disconnect">Se déconnecter</a></li>
                <?php else : ?>
                <li><a href="index.php?action=login">Se connecter</a></li>
                <li><a href="#modal1" class="js-modal">S'inscrire</a></li>
                <?php endif ; ?>
                <aside id="modal1" class="modal" aria-hidden="true" role="dialog" aria-labelledby="titlemodal" style="display:none;">

                   <div class="modal-wrapper js-modal-stop">
                       <button class="js-modal-close">Fermer</button>
                    <h1 id="titlemodal">INSCRIPTION</h1>
            
                <form name="mon-formulaire1" method="post" action="index.php?action=register">
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
                  <input id="pseudo" type="text" name="pseudo" value="<?php if(isset($_POST["pseudo"]))echo $_POST["pseudo"] ?>" />
              </p>

              <p>
                 Votre Mail :<br />
                  <input id="emailRegister" type="text" name="email" value="<?php if(isset($_POST["email"]))echo $_POST["email"] ?>" />
              </p>


              <p>
                Votre Mot de Passe :<br />
                  <input id="passwordRegister" type="password" name="passwordRegister" value="<?php if(isset($_POST["passwordRegister"]))echo $_POST["passwordRegister"] ?>" />
             </p>

             <p>
                Confirmation de votre Mot de Passe :<br />
                  <input id="passwordConfRegister" type="password" name="passwordConfRegister" value="<?php if(isset($_POST["passwordConfRegister"]))echo $_POST["passwordConfRegister"] ?>" />
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