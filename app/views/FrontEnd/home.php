<?php

include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";
// echo (password_hash('Kercode', PASSWORD_DEFAULT));

?>

<main>

<div id="cookie-bar">
        <div class="cookie">
            Ce site web utlilise des cookies pour personnaliser le contenu et pour analyser notre trafic. 
            En utilisant ce site, vous acceptez notre utilisation des cookies. 
            Vous pouvez refusez 
            <button id='nocookie'>en cliquant ici</button>
            Si ce n'est pas le cas, cliquez ici : 
            <button id="cookieok">J'accepte</button>
        </div>
    </div>		

<section id="main-image" alt="ploumanach">
        <div class="paper">
            <h2>Bienvenue en<br><strong>Bretagne</strong></h2>
            <a href="index.php?action=trip" class="button-1">Randonnée</a>
        </div>
    </section>

    <section id="stages">
        <div class="paper">



            <ul>
                <li id="stage-1">
                    <img src="app/public/Images/korriganpapier.jpg" alt="korrigan">
                    <h4>Planifier</h4>
                    <p>Confiez-nous vos rêves d’évasion : en famille ou entre amis, nous trouverons le circuit qui
                        comblera vos attentes.</p>
                </li>

                <li id="stage-2">
                    <img src="app/public/Images/korrigantableau.jpg" alt="korrigan">
                    <h4>Organiser</h4>
                    <p>Bénéficiez de l’expertise de nos abonnés pour toute sorte de circuits, ils vous conseille et vous oriente dans
                        la réalisation de votre randonnée.</p>
                </li>

                <li id="stage-3">
                    <img src="app/public/Images/korrigantableauprofil.jpg" alt="korrigan">
                    <h4>Voyager</h4>
                    <p>Nous nous assurons de veiller à votre pleine sérénité tout au long
                        de votre périple.</p>

                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </section>

    <section id="alternative">
        <div class="paper">
            <article style="background-image: url(app/public/Images/pharepetitminou.jpg);" alt="phare-du-petit-minou">
                <div class="cover">
                    <h4>Partez en famille</h4>
                    <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux sur les sentions Bretons!</small></p>
                </div>

            </article>



            <article style="background-image: url(app/public/Images/quiberon2.jpg);" alt="côte-sauvage-de-quiberon">
                <div class="cover">
                    <h4>Envie de s'evader</h4>
                    <p><small>Profitez de l'évasion et du bien-être que peut procurer le grand air et la nature qu'offre la Bretagne !</small></p>
                </div>

            </article>
            <div class="clear"></div>

        </div>
    </section>

    <section id="contact">
        <div class="paper">
            <h3>Contactez-Nous</h3>
            <p>Chez Tro-Vale Breizh nous savons que la randonnée est une aventure humaine unique mais également un engagement
                personnel important pour vous. C’est pourquoi nous mettons un point d’honneur à prendre en compte
                chacune de vos attentes pour vous aider dans la préparation de votre périple avec des circuits sur
                mesure.</p>
        </div>
        
        <form method="post" action="index.php?action=contact">
        <?php
        if (isset($errors)) :
        if ($errors) :
        foreach ($errors as $error) :
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
                    <div class="message confirmation">Votre message a bien été envoyé !</div>
                </div>
            </div>


            <?php
            endif;
            endif
            ?>
            <label for="contactName">Nom</label>
            <input type="text" name="name" id="contactName" placeholder="Votre Nom" value="<?php if (isset($_POST["name"])) {
                echo $_POST["name"];
            } ?>">

            <label for="contactEmail">Email</label>
            <input type="text" name="email" id="contactEmail" placeholder="Votre Email" value="<?php if (isset($_POST["email"])) {
                echo $_POST["email"];
            } ?>">
            
            <label for="contactObjet">Objet:</label>
            <input type="text" name="objet" id="contactObjet" placeholder="Objet Message" value="<?php if (isset($_POST["objet"])) {
                echo $_POST["objet"];
            } ?>">
            
              <br><br><br>
            <p><label for="contactMessage">Votre Message:</label> </p>
                <p><textarea rows="10" cols="80" name="content" id="contactMessage" placeholder="votre message" value="<?php if (isset($_POST["content"])) {
                echo $_POST["content"];
            } ?>"></textarea></p>
               
            <input type="submit" value="OK" class="button-3">


        </form>
    </section>
    </main>

    <?php
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>