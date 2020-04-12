<?php

include_once "app/views/FrontEnd/layouts/head.php";
include_once "app/views/FrontEnd/layouts/header.php";
// if(!empty($_POST)){
//     $contact = new Projet\Controllers\ControllerFront();
//     $errors = $contact->contact();
// }

?>

<main>
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
                    <p>Bénéficiez de l’expertise de nos spécialistes de chaque destination, ils vous accompagnent dans
                        la réalisation de votre voyage.</p>
                </li>

                <li id="stage-3">
                    <img src="app/public/Images/korrigantableauprofil.jpg" alt="korrigan">
                    <h4>Voyager</h4>
                    <p>Nous nous chargeons d’assurer votre sécurité et de veiller à votre pleine sérénité tout au long
                        de votre voyage.</p>

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
                    <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>

            </article>



            <article style="background-image: url(app/public/Images/quiberon2.jpg);" alt="côte-sauvage-de-quiberon">
                <div class="cover">
                    <h4>Envie de s'evader</h4>
                    <p><small>Parfois un peu d’évasion serait le bienvenue et ferait le plus grand bien !

                        </small></p>
                    <a href="#" class="button-2">Plus d'infos</a>
                </div>

            </article>
            <div class="clear"></div>

        </div>
    </section>

    <section id="contact">
        <div class="paper">
            <h3>Contactez-Nous</h3>
            <p>Chez Tro-Vale Breizh nous savons que voyager est une aventure humaine mais également un engagement
                financier important pour vous. C’est pourquoi nous mettons un point d’honneur à prendre en compte
                chacune de vos attentes pour vous aider dans la préparation de votre séjour, circuit ou voyage sur
                mesure.</p>
        </div>
        
        <form method="post" action="index.php?action=contact">
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
                    <div class="message confirmation">Votre message a bien été envoyé !</div>
                </div>
            </div>


            <?php
            endif;
            endif
            ?>
            <label for="contactName">Nom</label>
            <input type="text" name="name" id="contactName" placeholder="Votre Nom" value="<?php if(isset($_POST["name"]))echo $_POST["name"] ?>">

            <label for="contactEmail">Email</label>
            <input type="text" name="email" id="contactEmail" placeholder="Votre Email" value="<?php if(isset($_POST["email"]))echo $_POST["email"] ?>">
            
            <label for="contactObjet">Objet:</label>
            <input type="text" name="objet" id="contactObjet" placeholder="Objet Message" value="<?php if(isset($_POST["objet"]))echo $_POST["objet"] ?>">
            
              <br><br><br>
            <p><label for="contactMessage">Votre Message:</label> </p>
                <p><textarea rows="10" cols="80" name="content" id="contactMessage" placeholder="votre message" value="<?php if(isset($_POST["content"]))echo $_POST["content"] ?>"></textarea></p>
               
            <input type="submit" value="OK" class="button-3">


        </form>
    </section>
    </main>

    <?php 
    include_once 'app/views/FrontEnd/layouts/footer.php';
    ?>